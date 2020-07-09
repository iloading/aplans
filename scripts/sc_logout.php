<?php
session_start();

$email = $_SESSION['email_aplans'];
$id = $_SESSION['id_user_aplans'];
$role = $_SESSION['role_aplans'];


setcookie('email', $email, time() - (86400 * 30), "/"); // 86400 = 1 day
setcookie('id', $id, time() - (86400 * 30), "/"); // 86400 = 1 day
setcookie('role', $role, time() - (86400 * 30), "/"); // 86400 = 1 day

unset($_SESSION['email_aplans']);
unset($_SESSION['id_user_aplans']);
unset($_SESSION['role_aplans']);


unset($_COOKIE['email']);
unset($_COOKIE['id']);
unset($_COOKIE['role']);






header("Location: ../login.php");
