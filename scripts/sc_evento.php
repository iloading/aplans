<?php
require_once "../connections/connection.php";

session_start();

$id_user = $_SESSION['id_user_aplans'];
$id_evento = $_GET['idEvento'];

$data = array();


$link = new_db_connection();

$stmt = mysqli_stmt_init($link);

$query = "SELECT ref_event_type_id, ref_creator_id, name, date, slots, short_description, last_message_update FROM event WHERE id = ?";



if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id_evento);
    // Devemos validar também o resultado do execute!

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $tipoEvento, $criador, $nomeEvento, $dataEvento, $slots, $descricao, $ultimoUpdate);

        /* fetch values */

        while (mysqli_stmt_fetch($stmt)) {
            $row_result = array();
            $row_result["tipo"] = htmlspecialchars($tipoEvento);
            $row_result["criador"] = htmlspecialchars($criador);
            $row_result["nome"] = htmlspecialchars($nomeEvento);
            $row_result["data"] = htmlspecialchars($dataEvento);
            $row_result["slotsMax"] = htmlspecialchars($slots);
            $row_result["descricao"] = htmlspecialchars($descricao);
            $row_result["ultimoUpdate"] = htmlspecialchars($ultimoUpdate);

            $data['evento'][] = $row_result;
        }
        //Caso ocorra algum erro
        if (mysqli_stmt_num_rows($stmt) == 0) { 
            $row_result = "vazio";
            $data['evento'][] = $row_result;
        }
        // print json_encode($data);
        mysqli_stmt_close($stmt);
    } else {
        $row_result["erro"] = '1';
        $data[] = $row_result;
        print json_encode($data);
    }
} else {
    $row_result["erro"] = '2';
    $data[] = $row_result;
    print json_encode($data);
}


print json_encode($data);