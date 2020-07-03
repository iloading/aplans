<?php
require_once "../connections/connection.php";
session_start();
function verf_pass()
{
    $id_user_logado =$_SESSION['id_user_iloading'];
    $verfi_pass = $_POST['pass'];

    $link = new_db_connection();
    $stmt = mysqli_stmt_init($link);

    $query = "SELECT password FROM user WHERE id = ?";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 'i', $id_user_logado);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt, $pass_atual);

            mysqli_stmt_fetch($stmt);

            if (password_verify($verfi_pass, $pass_atual)) {
                return true;
            } else {
                return false;
            }
        }
    };
}