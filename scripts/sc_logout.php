<?php
session_start();

unset($_SESSION['email_iloading']);
unset($_SESSION['id_user_iloading']);
unset($_SESSION['role_iloading']);


header("Location: ../index.php");
