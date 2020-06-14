<?php
require_once "../../connections/connection.php";
require_once "../../scripts/sc_validate_input.php";
require_once "sc_check_admin.php";
session_start();





if( $admin == 1){
    $sucesso = 1;

    if (isset($_GET["email_novo"]) && isset($_GET["password"]) && isset($_GET["nome"]) && isset($_GET["password_confirmar"])) {

        if ($_GET["email_novo"] != "") {
            $email_novo = $_GET['email_novo'];
            $nome_novo = $_GET['nome'];
            $pass = $_GET["password"];
            $pass_confirmar = $_GET["password_confirmar"];

            if (filter_var($email_novo, FILTER_VALIDATE_EMAIL) === FALSE) {
                $sucesso = 0;
                $msg = 0;
            };


            if ($pass != "") {
                if ($pass == $pass_confirmar) {
                    $password_hash = password_hash($pass, PASSWORD_DEFAULT);
                } else {
                    $sucesso = 0;
                    $msg = 6;
                };
            } else { //Se a pass não for preenchida
                $sucesso = 0;
                $msg = 4;
            }
        } else { //Se não for preenchido o email
            $sucesso = 0;
            $msg = 0;
        }




        if (isset($_GET["telemovel"]) && isset($_GET["morada"]) && isset($_GET["codigo_postal"])) {

            $telemovel = $_GET['telemovel'];
            $morada = $_GET['morada'];
            $codigo_postal = $_GET['codigo_postal'];

            if (trim($_GET["telemovel"]) != "") {
                $pattern = "/(9[1236][0-9]) ?([0-9]{3}) ?([0-9]{3})/";

                if (preg_match($pattern, $telemovel)) {
                } else { //Se o telemoivel nmão for válido
                    $sucesso = 0;
                    $msg = 1;
                }
            } else { //Se for deixado em branco
                $telemovel = NULL;
            }

            if ($codigo_postal != "") {
                $pattern = "/^\d{4}-\d{3}?$/";

                if (preg_match($pattern, $codigo_postal)) {
                } else {
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


    } else { //Se não for inserido um dos valores obrigatórios
        $sucesso = 0;
        $msg = 0;
    }




    if ($sucesso == 1) { //Se até a este momento estiver tudo correto, verifica se o email já existe na BD
        $link = new_db_connection();

        $stmt = mysqli_stmt_init($link);

        $query = "SELECT email FROM users WHERE email = ?";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 's', $email_novo);
            // Devemos validar também o resultado do execute!
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $sucesso = 0;
                    $msg = 5;
                    $emailExiste = true;
                } else {
                    $emailExiste = false;
                }

                //mysqli_stmt_fetch($stmt);



                mysqli_stmt_close($stmt);
            }
        }
    }
    // if ($emailExiste == true) {
    //     $sucesso= 0;
    //     $msg = 5;
    //     echo "email";
    // }


    if ($sucesso == 1) {

        $stmt = mysqli_stmt_init($link);

        $query = "INSERT INTO users (email, password_hash, nome, telemovel, morada, codigo_postal) VALUES (?,?,?,?,?,?)";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'ssssss', $email_novo, $password_hash, $nome_novo, $telemovel, $morada, $codigo_postal);


            if (mysqli_stmt_execute($stmt)) {

                $msg = 7;

                $data = array();

                $row_result = array();
                $row_result["msgBool"] = true;
                $row_result["msg"] = $msg;
                $data[0] = $row_result;

                print json_encode($data);

                //mysqli_stmt_close($stmt);



            } else {
                // Acção de erro caso o registo falhe
                echo "Error:" . mysqli_error($link);
                //mysqli_close($link);
            }
        } else {
            echo "erro";
        }
    } else {
        $data = array();

        $row_result = array();
        $row_result["msgBool"] = true;
        $row_result["msg"] = $msg;
        $data[0] = $row_result;

        print json_encode($data);
    }
}else{
    header("location: ../../index.php");
}