<?php
require_once "../connections/connection.php";

session_start();

if (isset($_SESSION['id_user_aplans'])) {

    $sucesso = 1;
    $row_results_erro = array();
    $criador = $_SESSION['id_user_aplans'];
   
    




    print json_encode($data);
}
