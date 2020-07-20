<?php
require_once "../connections/connection.php";

session_start();

$id_user = $_SESSION['id_user_aplans'];
$data = array();

$id_user_adicionar = $_GET['id_add'];


$link = new_db_connection();

/*----------------- remover users ----------------*/

$stmt = mysqli_stmt_init($link);

$query = "INSERT INTO amigos (user_id1, user_id2, ref_status_id, ref_last_action_user_id) VALUES (?,?,1,?)";



if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, "iii", $id_user, $id_user_adicionar, $id_user);
    // Devemos validar também o resultado do execute!

    if (mysqli_stmt_execute($stmt)) {

        $data['amizade_adicionada'] = 'sucesso';


        mysqli_stmt_close($stmt);
    }
}

print json_encode($data);
