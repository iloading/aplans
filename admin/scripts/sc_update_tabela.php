<?php
session_start();
require_once "../../connections/connection.php";





$email_velho = $_GET['email_velho'];
$email_novo = $_GET['email_novo'];
$role_novo =  $_GET['role'];
$nome_novo = $_GET['nome'];
$telemovel_novo = $_GET['telemovel'];
$morada_novo = $_GET['morada'];
$codigo_postal_novo = $_GET['codigo_postal'];
$password = $_GET['password'];



$link = new_db_connection();

$stmt = mysqli_stmt_init($link);

if ($password != '') {
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
  
    $query = "UPDATE users SET email = ?, ref_roles_id = ?, nome = ?, telemovel = ?, morada = ?, codigo_postal = ?, password_hash = ?  WHERE email = ?";
}else {
    $query = "UPDATE users SET email = ?, ref_roles_id = ?, nome = ?, telemovel = ?, morada = ?, codigo_postal = ?  WHERE email = ?";
}




if (mysqli_stmt_prepare($stmt, $query)) {
    if ($password != '') {
        mysqli_stmt_bind_param($stmt, 'sissssss', $email_novo, $role_novo, $nome_novo, $telemovel_novo, $morada_novo, $codigo_postal_novo, $password_hash, $email_velho);
    }else {
        mysqli_stmt_bind_param($stmt, 'sisssss', $email_novo, $role_novo, $nome_novo, $telemovel_novo, $morada_novo, $codigo_postal_novo, $email_velho);
    }
    echo '<hr>';
    echo $query;
    echo '<hr>';
    echo $email_novo, $role_novo, $nome_novo, $telemovel_novo, $morada_novo, $codigo_postal_novo, $email_velho, $password_hash;
    if (mysqli_stmt_execute($stmt)) {

        mysqli_stmt_fetch($stmt);
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
