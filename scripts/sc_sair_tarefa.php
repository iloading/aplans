<?php
require_once "../connections/connection.php";

session_start();


$id_user_log = $_SESSION['id_user_aplans'];
$data = array();



$id_tarefa_evento = $_GET['id_tarefa_evento'];


$link = new_db_connection();

/*----------------- Ir buscar os tipos de Eventos à BD ----------------*/

$stmt = mysqli_stmt_init($link);


$query = "SELECT ref_event_id FROM tasks_do_evento WHERE id = ?";

if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id_tarefa_evento);
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $id_evento);


        mysqli_stmt_fetch($stmt);



        mysqli_stmt_close($stmt);
    }
}

$stmt = mysqli_stmt_init($link);
$query = "SELECT id FROM users_nos_eventos WHERE ref_user_id = ? AND ref_event_id = ?";

if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'ii', $id_user_log, $id_evento);
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $id_user_no_evento);




        while (mysqli_stmt_fetch($stmt)) {
        }



        mysqli_stmt_close($stmt);
    }
}

$stmt = mysqli_stmt_init($link);
$query = "SELECT id FROM tasks_de_users WHERE ref_users_nos_eventos_id = ? AND ref_tasks_do_evento_id = ?";

if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'ii', $id_user_no_evento, $id_tarefa_evento);
    if (mysqli_stmt_execute($stmt)) {





        while (mysqli_stmt_fetch($stmt)) {
        }

        if (mysqli_stmt_num_rows($stmt) >= 1) {
            $user_ja_na_tarefa = 1;
        } else {
            $user_ja_na_tarefa = 0;
        }


        mysqli_stmt_close($stmt);
    }
}

if ($user_ja_na_tarefa == 1) {
    $stmt = mysqli_stmt_init($link);
    $query = "DELETE FROM tasks_de_users WHERE ref_users_nos_eventos_id = ? AND ref_tasks_do_evento_id = ?";
    

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 'ii', $id_user_no_evento, $id_tarefa_evento);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_fetch($stmt);

            $data['user_tarefa'] = 'sucesso';
            $data['id_evento_associado'] = $id_evento;



            mysqli_stmt_close($stmt);
        }
    }
} else {
    $data['user_tarefa'] = 'erro';
}
print json_encode($data);
