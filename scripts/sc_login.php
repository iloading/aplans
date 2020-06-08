<?php
require_once "../connections/connection.php";

if (isset($_POST["email"]) && isset($_POST["password"]) ) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);

    $query = "SELECT email, password_hash, id FROM user WHERE email LIKE ?";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 's', $email);

        if (mysqli_stmt_execute($stmt)) {

            mysqli_stmt_bind_result($stmt, $nome, $password_hash, $id_utilizador);

            if (mysqli_stmt_fetch($stmt)) {
               
                if (password_verify($password, $password_hash)) {
                    // Guardar sessão de utilizador
                    session_start();
                    $_SESSION["email"] = $email;
                    $_SESSION["nome"] = $nome;
                    $_SESSION["id"] = $id_utilizador;




                    // Feedback de sucesso
                    header("Location: ../index.php");
                } else {
                    // Password está errada
                    echo "Password incorreta!";
                    echo "<a href='../index.php'>Tente de novo</a>";
                }
            } else {
                // Username não existe
                echo "Email incorreto";
                echo "<a href='../index.php'>Try again</a>";
            }
            mysqli_stmt_close($stmt);
            mysqli_close($link);
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