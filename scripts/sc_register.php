<?php
require_once "../connections/connection.php";
session_start();

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST['email'];
    $pass = $_POST["password"];
    $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $data_nascimento = $_POST['data'];
    $data = date("Y-m-d", strtotime($data_nascimento));
    $telemovel = $_POST['tel'];
    $morada = $_POST['morada'];
    $codigo_postal = $_POST['cp'];
    $localidade = $_POST['localidade'];
    $nif = $_POST['nif'];

    

    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);

    $query = "SELECT email FROM user WHERE email = ?";

    if (mysqli_stmt_prepare($stmt, $query)) {
        
        mysqli_stmt_bind_param($stmt, 's', $email);
        // Devemos validar também o resultado do execute!
        if (mysqli_stmt_execute($stmt)) {

            mysqli_stmt_store_result($stmt);

           if (mysqli_stmt_num_rows($stmt) == 1) {
                $_SESSION['msg'] =  true;
                $emailExiste = true;
                
                header("Location: ../login.php?msg=2");
           }else {
                $emailExiste = false;
                
           } 

            //mysqli_stmt_fetch($stmt);
            

            
            mysqli_stmt_close($stmt);
        }
    }

    if ($emailExiste == false) {


        $stmt = mysqli_stmt_init($link);

        $query = "INSERT INTO user (email, password, nome, apelido, data_nascimento, telemovel, morada, codigo_postal, localidade, nif) VALUES (?,?, ?,?,?,?,?,?,?,?)";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'sssssisisi', $email, $password_hash, $nome, $apelido, $data, $telemovel, $morada, $codigo_postal, $localidade, $nif);

            // Devemos validar também o resultado do execute!
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_close($stmt);

                //REGISTOU COM SUCESSO AGORA FAZ LOGO O LOGIN

                //LOGIN
                $stmt = mysqli_stmt_init($link);

                $query = "SELECT password, ref_roles_codigo, id FROM user WHERE email LIKE ?";

                if (mysqli_stmt_prepare($stmt, $query)) {
                    mysqli_stmt_bind_param($stmt, 's', $email);

                    if (mysqli_stmt_execute($stmt)) {
                        mysqli_stmt_bind_result($stmt, $password_hash, $perfil, $id);

                        if (mysqli_stmt_fetch($stmt)) {
                            if (password_verify($pass, $password_hash)) {
                                // Guardar sessão de utilizador
                                session_start();
                                $_SESSION["email_iloading"] = $email;
                               $_SESSION['id_user_iloading'] = $id;
                               $_SESSION['role_iloading'] = $perfil;

                                // Feedback de sucesso
                                //echo "SUCESSO";
                               
                                header("Location: ../index.php");
                            } else {
                                
                                echo "FAIL";
                                //header("Location: ../index.php?msg=2#login");
                            }
                        } else {
                            // Username não existe
                            //echo "FAIL 1";
                            header("Location: ../index.php?msg=2#login");
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
        }
    }else {
        echo "blablbalb";
    }
}
