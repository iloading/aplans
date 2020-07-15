<?php 
    require_once "../connections/connection.php";

    session_start();

    $id_user = $_SESSION['id_user_aplans'];
    $id_evento = $_GET['idEvento'];
    $data = array();


    $link = new_db_connection();

    /*----------------- INSERIR O USER LOGADO NO EVENTO SELECIONADO ----------------*/

    $stmt = mysqli_stmt_init($link);

    $query = "INSERT INTO users_nos_eventos (ref_user_id, ref_event_id) VALUES (?,?);";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt,"ii", $id_user, $id_evento );
        if (mysqli_stmt_execute($stmt)) {
            $data['inserir']= "sucesso";
        }else {
            $data['inserir'] = "erro";
        }
    }else {
        $data['inserir'] = "erro";
    }

print json_encode($data);
