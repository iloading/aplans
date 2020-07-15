<?php
require_once "../connections/connection.php";

session_start();

$id_user = $_SESSION['id_user_aplans'];
$id_evento = $_GET['idEvento'];
$id_novo_Organizador = $_GET['novoOrganizador'];
$data = array();


$link = new_db_connection();

/*----------------- VERIFICAR SE O USER A REMOVER É O CRIADOR DO EVENTO ----------------*/

$stmt = mysqli_stmt_init($link);

$query = "UPDATE event
SET ref_creator_id = ?
WHERE id = ?";

if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, "ii", $id_novo_Organizador,$id_evento);
    if (mysqli_stmt_execute($stmt)) {
        
        $data['trocaOrganizador'] = "sucesso";
    }
}
print json_encode($data);