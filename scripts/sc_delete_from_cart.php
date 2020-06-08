<?php
session_start();
require_once "../connections/connection.php";

if (isset($_SESSION['id_user_iloading']) && isset($_GET['idproduto']) && $_GET['idproduto']!='') {
    $id_user =$_SESSION['id_user_iloading'];
    $id_produto = $_GET['idproduto'];

    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);

    $query = "DELETE FROM produtos_carrinho WHERE ref_user_id = ? AND ref_produto_id = ?";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 'ii', $id_user, $id_produto);

        mysqli_stmt_execute($stmt);
        echo "SUCESSO";
        header("Location: ../cart.php");
    }else {
        echo "ERRADO";
    }
}else {
    echo "ERRADO";
}


