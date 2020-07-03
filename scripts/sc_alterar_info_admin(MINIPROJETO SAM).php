<?php
session_start();
require_once "../connections/connection.php";
require_once "sc_verificar_pass.php";
if(verf_pass()){ //SE A PALAVRA PASS ESTIVER CORRETA

    //VERIFICAÇÕES DOS DADOS 
    echo $_SESSION['id_user_escolhido'];
    echo $_POST['email_novo'];
    echo $_POST['role_novo'];

    if (isset($_SESSION['id_user_escolhido']) && isset($_POST['email_novo']) &&  isset($_POST['role_novo'])) {
        if ($_POST['email_novo'] != '' && $_POST['role_novo'] != '') {
            if ($_POST['role_novo'] == 1 || $_POST['role_novo'] == 2) {
            
                
                $id_user_escolhido =  $_SESSION['id_user_escolhido'];
                $email_novo = $_POST['email_novo'];
                $role_novo =  $_POST['role_novo'];

                $link = new_db_connection();

                $stmt = mysqli_stmt_init($link);

                $query = "SELECT email, ref_roles_codigo FROM user WHERE id = ?";


                if (mysqli_stmt_prepare($stmt, $query)) {
                    mysqli_stmt_bind_param($stmt, 'i', $id_user_escolhido);

                    if (mysqli_stmt_execute($stmt)) {
                        mysqli_stmt_bind_result($stmt, $email_antigo, $role_antigo);
                        mysqli_stmt_fetch($stmt);

                        mysqli_stmt_close($stmt);
                        mysqli_close($link);
                        if ($email_antigo == $email_novo && $role_antigo == $role_novo) {
                            $_SESSION['msg'] =  true;
                            header("Location: ../my_acc.php?msg=4"); //NÃO HOUVE MUDANÇA DE DADOS
                        } else {
                            $link = new_db_connection();

                            $stmt = mysqli_stmt_init($link);

                            $query = "UPDATE user SET email = ?, ref_roles_codigo = ?  WHERE id = ?";


                            if (mysqli_stmt_prepare($stmt, $query)) {
                                mysqli_stmt_bind_param($stmt, 'sii', $email_novo, $role_novo,  $id_user_escolhido);
                                if (mysqli_stmt_execute($stmt)) {

                                    mysqli_stmt_fetch($stmt);

                                    mysqli_stmt_close($stmt);
                                    mysqli_close($link);
                                    $_SESSION['msg'] =  true;
                                    header("Location: ../my_acc.php?msg=1");
                                }
                            } else {
                                //algo deu errado
                                mysqli_stmt_close($stmt);
                                mysqli_close($link);
                                $_SESSION['msg'] =  true;
                                
                                header("Location: ../my_acc.php?msg=3");
                            }
                        }
                    }
                }
            } else {
                $_SESSION['msg'] =  true;
                
                header("Location: ../my_acc.php?msg=3");
            }
        } else {
            $_SESSION['msg'] =  true;
            
            header("Location: ../my_acc.php?msg=3");
        }
    } else {
        $_SESSION['msg'] =  true;
        
        header("Location: ../my_acc.php?msg=3");
    }
}else {
    $_SESSION['msg'] =  true;
    
    header("Location: ../my_acc.php?msg=6");
}

