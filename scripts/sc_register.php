<?php
require_once "../connections/connection.php";
session_start();

if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["nome"]) && isset($_POST["password_confirmar"])) {

    function validate($string){
        return htmlspecialchars($string,ENT_QUOTES,'UTF-8');
    }
   
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $pass = $_POST["password"];
    $pass_confirmar = $_POST["password_confirmar"];

    validate($nome);

    if ($pass==$pass_confirmar) {
        $password_hash = password_hash($pass, PASSWORD_DEFAULT);
    };
    if (isset($_POST["telemovel"]) && isset($_POST["morada"]) && isset($_POST["cp"])) {
        $telemovel = $_POST['telemovel'];
        $morada = $_POST['morada'];
        $codigo_postal = $_POST['cp'];
    }else {
        $telemovel = "";
        $morada = "";
        $codigo_postal = "";
    }
    

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

        $query = "INSERT INTO user (email, password_hash, nome, telemovel, morada, codigo_postal) VALUES (?,?,?,?,?,?)";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'sssiss', $email, $password_hash, $nome, $telemovel, $morada, $codigo_postal);

            // Devemos validar também o resultado do execute!
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_close($stmt);

                //REGISTOU COM SUCESSO AGORA FAZ LOGO O LOGIN

                //LOGIN
                $stmt = mysqli_stmt_init($link);

                $query = "SELECT password_hash, ref_roles_id, id FROM user WHERE email LIKE ?";

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
                               
                                //header("Location: ../index.php");
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
        }else{
            echo "erro";
        }
    }else {
        echo "blablbalb";
    }
}
