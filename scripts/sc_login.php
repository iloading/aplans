<?php
session_start();
require_once "../connections/connection.php";

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST['email'];
    $password_inserida = $_POST['password'];

    
    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);

    $query = "SELECT password, ref_roles_codigo, id FROM user WHERE email LIKE ?";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 's', $email);

        if (mysqli_stmt_execute($stmt)) {

            mysqli_stmt_bind_result($stmt, $password_hash, $perfil, $id);

            if (mysqli_stmt_fetch($stmt)) {
                
                if (password_verify($password_inserida, $password_hash)) {
                    // Guardar sessão de utilizador
                    session_start();
                   $_SESSION["email_iloading"] = $email;
                   $_SESSION['id_user_iloading'] = $id;
                   $_SESSION['role_iloading'] = $perfil;

                    // Feedback de sucesso
                    //echo "SUCESSO";
                    
                    header("Location: ../index.php");
                } else {
                    // Password está errada
                    //echo "FAIL";
                    $_SESSION['msg'] =  true;
                    header("Location: ../login.php?msg=3");
                }
            } else {
                // Username não existe
                //echo "FAIL 1";
                $_SESSION['msg'] =  true;
                header("Location: ../login.php?msg=3");
            }
            mysqli_stmt_close($stmt);
            mysqli_close($link);
        } else {
            // Acção de erro
            $_SESSION['msg'] =  true;
            header("Location: ../login.php?msg=3");
            
        }
    } else {
        // Acção de erro
        $_SESSION['msg'] =  true;
        header("Location: ../login.php?msg=3");
        echo "Error:" . mysqli_error($link);
        mysqli_close($link);
    }
} else {
    $_SESSION['msg'] =  true;
    header("Location: ../login.php?msg=3");
    echo "Campos do formulário por preencher";
}
