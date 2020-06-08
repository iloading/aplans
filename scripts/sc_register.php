<?php
require_once "../connections/connection.php";

if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);

    $query = "INSERT INTO user (username, email, password_hash) VALUES (?,?,?)";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $password_hash);

        // Devemos validar também o resultado do execute!
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($link);

            // Acção de sucesso
            header("Location: ../index.php");
        } else {
            // Acção de erro
            echo "Error:" . mysqli_stmt_error($stmt);
        }
    } else {
        // Acção de erro
        echo "Error:" . mysqli_error($link);
        mysqli_close($link);
    }
} else {
    echo "Campos do formulário por preencher";
}