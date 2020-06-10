<?php
session_start();

unset($_SESSION['email_aplans']);
unset($_SESSION['id_user_aplans']);
unset($_SESSION['role_aplans']);


header("Location: ../index.php");
