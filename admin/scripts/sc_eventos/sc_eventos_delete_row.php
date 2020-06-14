<?php
session_start();
require_once "../../../connections/connection.php";
require_once "sc_eventos/sc_check_admin.php";


if ($admin == 1) {


    $id = $_GET['id'];



    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);


    $query = "DELETE FROM event WHERE id = ?";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 's', $id);
        if (mysqli_stmt_execute($stmt)) {

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
