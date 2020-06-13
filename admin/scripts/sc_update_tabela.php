<?php
session_start();
require_once "../../connections/connection.php";


$sucesso = 1;

if (isset($_GET["email_velho"]) && isset($_GET["email_novo"]) && isset($_GET["password"]) && isset($_GET["nome"]) && isset($_GET["password_confirmar"])) {

    if (trim($_GET["email_velho"]) != "" && trim($_GET["email_novo"]) != "" && trim($_GET["nome"]) != "") {

        $email_velho = $_GET['email_velho'];
        $email_novo = $_GET['email_novo'];
        $role_novo =  $_GET['role'];
        $nome_novo = $_GET['nome'];
        $password = $_GET['password'];
        $password_confirmar = $_GET['password_confirmar'];


        if (filter_var($email_novo, FILTER_VALIDATE_EMAIL) === FALSE) {
            $sucesso = 0;
            $msg = 0;
        };

    } else {
        $sucesso = 0;
        $msg = 0;
    }

    if (isset($_GET["telemovel"]) && isset($_GET["morada"]) && isset($_GET["codigo_postal"])) {

        $telemovel_novo = trim($_GET['telemovel']);
        $morada_novo = trim($_GET['morada']);
        $codigo_postal_novo = trim($_GET['codigo_postal']);

        if (trim($_GET["telemovel"]) != "") {
            $pattern = "/(9[1236][0-9]) ?([0-9]{3}) ?([0-9]{3})/";

            if (preg_match($pattern, $telemovel_novo)) {
            } else {
                $sucesso = 0;
                $msg = 1;
            }
        } else {
            $telemovel_novo = NULL;
        }

        if ($codigo_postal_novo != "") {
            $pattern = "/^\d{4}-\d{3}?$/";

            if (preg_match($pattern, $codigo_postal_novo));
            else {
                $sucesso = 0;
                $msg = 2;
            }
        }
    }
}

if ($sucesso == 1) {


    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);

    $query = "SELECT email FROM users WHERE email = ?";

    if (mysqli_stmt_prepare($stmt, $query)) {

        mysqli_stmt_bind_param($stmt, 's', $email_velho);
        // Devemos validar também o resultado do execute!
        if (mysqli_stmt_execute($stmt)) {

            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {
                $_SESSION['msg'] =  true;
                $emailExiste = true;

                //header("Location: ../login.php?msg=2");
            } else {
                $emailExiste = false;
            }

            //mysqli_stmt_fetch($stmt);

            mysqli_stmt_close($stmt);
        }
    }

    if ($email_existe == false) {

        $link = new_db_connection();

        $stmt = mysqli_stmt_init($link);

        if ($password != '') {
            if ($password == $password_confirmar) {

                $password_hash = password_hash($password, PASSWORD_DEFAULT);

                $query = "UPDATE users SET email = ?, ref_roles_id = ?, nome = ?, telemovel = ?, morada = ?, codigo_postal = ?, password_hash = ?  WHERE email = ?";
            };
        } else {
            $query = "UPDATE users SET email = ?, ref_roles_id = ?, nome = ?, telemovel = ?, morada = ?, codigo_postal = ?  WHERE email = ?";
        }




        if (mysqli_stmt_prepare($stmt, $query)) {
            if ($password != '') {
                mysqli_stmt_bind_param($stmt, 'sissssss', $email_novo, $role_novo, $nome_novo, $telemovel_novo, $morada_novo, $codigo_postal_novo, $password_hash, $email_velho);
            } else {
                mysqli_stmt_bind_param($stmt, 'sisssss', $email_novo, $role_novo, $nome_novo, $telemovel_novo, $morada_novo, $codigo_postal_novo, $email_velho);
            }
            echo '<hr>';
            echo $query;
            echo '<hr>';
            echo $email_novo, $role_novo, $nome_novo, $telemovel_novo, $morada_novo, $codigo_postal_novo, $email_velho, $password_hash;
            if (mysqli_stmt_execute($stmt)) {

                mysqli_stmt_fetch($stmt);
                mysqli_stmt_close($stmt);
                mysqli_close($link);
                $_SESSION['msg'] =  true;
                //header("Location: ../my_acc.php?msg=1");
            }
        } else {
            //algo deu errado
            mysqli_stmt_close($stmt);
            mysqli_close($link);
            $_SESSION['msg'] =  true;

            //header("Location: ../my_acc.php?msg=3");
        }
    }
}else {
    $data = array();
  
        $row_result = array();
        $row_result["msgBool"] = true;
        $row_result["msg"] = $msg;
        $data[] = $row_result;
    

    print json_encode($data);
}
