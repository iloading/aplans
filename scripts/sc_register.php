<?php
require_once "../connections/connection.php";
require_once "../scripts/sc_validate_input.php";
session_start();

$sucesso = 1;

if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["nome"]) && isset($_POST["password_confirmar"])) {

    if (trim($_POST["email"]) != "" && trim($_POST["password"]) != "" && trim($_POST["password_confirmar"]) != "" && trim($_POST["nome"]) != "") {
        $email = trim($_POST['email']);
        $nome = $_POST['nome'];
        $pass = $_POST["password"];
        $pass_confirmar = validate($_POST["password_confirmar"]);

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
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




    if (isset($_POST["telemovel"]) && isset($_POST["morada"]) && isset($_POST["cp"])) {

        $telemovel = trim($_POST['telemovel']);
        $morada = trim($_POST['morada']);
        $codigo_postal = trim($_POST['cp']);

        if (trim($_POST["telemovel"]) != "") {
            $pattern = "/(9[1236][0-9]) ?([0-9]{3}) ?([0-9]{3})/";

            if (preg_match($pattern, $telemovel)){}
            else{ 
                $sucesso = 0;
                $msg = 1;
            }
        }else {
            $telemovel = NULL;
        }

        if (trim($_POST["cp"]) != "") {
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

        mysqli_stmt_bind_param($stmt, 's', $email);
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
            mysqli_stmt_bind_param($stmt, 'sssiss', $email, $password_hash, $nome, $telemovel, $morada, $codigo_postal);

            // Devemos validar também o resultado do execute!
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_close($stmt);

                //REGISTOU COM SUCESSO AGORA FAZ LOGO O LOGIN

                //LOGIN
                $stmt = mysqli_stmt_init($link);

                $query = "SELECT password_hash, ref_roles_id, id FROM users WHERE email LIKE ?";

                if (mysqli_stmt_prepare($stmt, $query)) {
                    mysqli_stmt_bind_param($stmt, 's', $email);

                    if (mysqli_stmt_execute($stmt)) {
                        mysqli_stmt_bind_result($stmt, $password_hash, $perfil, $id);

                        if (mysqli_stmt_fetch($stmt)) {
                            if (password_verify($pass, $password_hash)) {
                                // Guardar sessão de utilizador
                                session_start();
                                $_SESSION["email_aplans"] = $email;
                                $_SESSION['id_user_aplans'] = $id;
                                $_SESSION['role_aplans'] = $perfil;

                                // Feedback de sucesso
                                //echo "SUCESSO";

                                header("Location: ../index.php");
                                //Nao esquecer de meter uma mensagem na pagina do index a dizer que o registo foi efetuado com sucesso, e o login feito automaticamente
                            } else {
                                echo "FAIL";
                                //header("Location: ../index.php?msg=2#login");
                            }
                        } else {
                            // Username não existe
                            //echo "FAIL 1";
                            //header("Location: ../index.php?msg=2#login");
                        }
                        mysqli_stmt_close($stmt);
                        mysqli_close($link);
                    } else {
                        // Acção de erro caso o login falhe
                        echo "Error:" . mysqli_stmt_error($stmt);
                    }
                }
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
    header("Location: ../login.php?msg=".$msg."");
}