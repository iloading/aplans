<?php
require_once "../../connections/connection.php";
require_once "../../scripts/sc_validate_input.php";
session_start();

echo $_GET["email_novo"], $_GET["password"], $_GET["nome"], $_GET["password_confirmar"], $_GET["telemovel"], $_GET["morada"], $_GET["codigo_postal"], $_GET["role"];

$sucesso = 1;

if (isset($_GET["email_novo"]) && isset($_GET["password"]) && isset($_GET["nome"]) && isset($_GET["password_confirmar"])) {

    if (trim($_GET["email_novo"]) != "") {
        $email_novo = $_GET['email_novo'];
        $nome_novo = $_GET['nome'];
        $pass = $_GET["password"];
        $pass_confirmar = $_GET["password_confirmar"];

        if (filter_var($email_novo, FILTER_VALIDATE_EMAIL) === FALSE) {
            $sucesso = 0;
            $msg = 0;
     
           
        };



        if ($pass == $pass_confirmar) {
            $password_hash = password_hash($pass, PASSWORD_DEFAULT);
        };
    }else {
        $sucesso = 0;
        $msg = 0;
    }




    if (isset($_GET["telemovel"]) && isset($_GET["morada"]) && isset($_GET["codigo_postal"])) {

        $telemovel = trim($_GET['telemovel']);
        $morada = $_GET['morada'];
        $codigo_postal = trim($_GET['codigo_postal']);

        if (trim($_GET["telemovel"]) != "") {
            $pattern = "/(9[1236][0-9]) ?([0-9]{3}) ?([0-9]{3})/";

            if (preg_match($pattern, $telemovel)){}
            else{ 
                $sucesso = 0;
                $msg = 1;
            }
        }else {
            $telemovel = NULL;
        }

        if ($codigo_postal != "") {
            $pattern = "/^\d{4}-\d{3}?$/";

            if (preg_match($pattern, $codigo_postal));
            else{ 
                $sucesso = 0;
                $msg = 2;
            }
        }

       
    } 
    // else {
    //     $telemovel = NULL;
    //     $morada = NULL;
    //     $codigo_postal = NULL;
    // }


}

if ($sucesso == 1) {




    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);

    $query = "SELECT email FROM users WHERE email = ?";

    if (mysqli_stmt_prepare($stmt, $query)) {

        mysqli_stmt_bind_param($stmt, 's', $email_novo);
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

    if ($emailExiste == false) {


        $stmt = mysqli_stmt_init($link);

        $query = "INSERT INTO users (email, password_hash, nome, telemovel, morada, codigo_postal) VALUES (?,?,?,?,?,?)";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'sssiss', $email_novo, $password_hash, $nome_novo, $telemovel, $morada, $codigo_postal);

            // Devemos validar também o resultado do execute!
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_close($stmt);

                //REGISTOU COM SUCESSO AGORA FAZ LOGO O LOGIN

            } else {
                // Acção de erro caso o registo falhe
                echo "Error:" . mysqli_error($link);
                mysqli_close($link);
            }
        } else {
            echo "erro";
        }
    } else {
        echo "blablbalb";
    }

}else {
    $_SESSION["msg"] = true;
    //header("Location: ../login.php?msg=".$msg."");
}









