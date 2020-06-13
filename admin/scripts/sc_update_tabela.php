<?php
session_start();
require_once "../../connections/connection.php";


    
    // if (isset($_POST['nome']) &&  isset($_POST['email']) && isset ($_POST['role']) && isset ($_POST['telemovel']) && isset ($_POST['morada']) && isset ($_POST['codigo_postal'])) {
        // if ($_GET['email_velho'] != '' && $_POST['role'] != '' && $_POST['nome'] != '') {
            // if ($_POST['role'] != "") {
                
                $email_velho = $_GET['email_velho'];
                $email_novo = $_GET['email_novo'];
                // $role_novo =  $_POST['role'];
                // $nome_novo = $_POST['nome'];
                // $telemovel_novo = $_POST['telemovel'];
                // $morada_novo = $_POST['morada'];
                // $codigo_postal_novo = $_POST['codigo_postal'];
                

                // $link = new_db_connection();

                // $stmt = mysqli_stmt_init($link);

                // $query = "SELECT nome, email, morada, telemovel, codigo_postal, ref_roles_id FROM user WHERE email = ?";


                // if (mysqli_stmt_prepare($stmt, $query)) {
                //     mysqli_stmt_bind_param($stmt, 'i', $emailEditar);

                //     if (mysqli_stmt_execute($stmt)) {
                //         mysqli_stmt_bind_result($stmt, $email_antigo, $role_antigo);
                //         mysqli_stmt_fetch($stmt);

                //         mysqli_stmt_close($stmt);
                //         mysqli_close($link);
                //         if ($email_antigo == $email_novo && $role_antigo == $role_novo) {
                //             $_SESSION['msg'] =  true;
                //             header("Location: ../my_acc.php?msg=4"); //NÃO HOUVE MUDANÇA DE DADOS
                //         } else {
                            $link = new_db_connection();

                            $stmt = mysqli_stmt_init($link);

                            $query = "UPDATE users SET email = ?  WHERE email = ?";

                            
                            if (mysqli_stmt_prepare($stmt, $query)) {
                                mysqli_stmt_bind_param($stmt, 'ss', $email_novo, $email_velho);
                                if (mysqli_stmt_execute($stmt)) {

                                    mysqli_stmt_fetch($stmt);
                                    echo "123";
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
                        
                    
                
            // } else {
            //     $_SESSION['msg'] =  true;

                //header("Location: ../my_acc.php?msg=3");
            // }
        // } else {
        //     $_SESSION['msg'] =  true;

            //header("Location: ../my_acc.php?msg=3");
        // }
    // } else {
    //     $_SESSION['msg'] =  true;

        //header("Location: ../my_acc.php?msg=3");
    // }