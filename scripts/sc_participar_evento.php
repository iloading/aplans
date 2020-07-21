<?php 
    require_once "../connections/connection.php";

    session_start();

    $id_user = $_SESSION['id_user_aplans'];
    $id_evento = $_GET['idEvento'];
    $data = array();


    $link = new_db_connection();
/*----------------- PREVENÇÂO DE ATAQUE E CORREÇÃO DE BUG ----------------*/
    $stmt = mysqli_stmt_init($link);

    $query = "SELECT id FROM users_nos_eventos WHERE ref_user_id = ? AND ref_event_id = ?";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, "ii", $id_user, $id_evento);
        if (mysqli_stmt_execute($stmt)) {
            while(mysqli_stmt_fetch($stmt)){

            }
            if (mysqli_stmt_num_rows($stmt) >=1) {
                $user_ja_no_evento = 1;
            }else {
                $user_ja_no_evento = 0;
            }
            mysqli_stmt_close($stmt);
        }
    } else {
        $data['inserir'] = "erro";
    }


    
    // echo $user_ja_no_evento;
    if ($user_ja_no_evento == 0) {
        /*----------------- INSERIR O USER LOGADO NO EVENTO SELECIONADO ----------------*/

        $stmt = mysqli_stmt_init($link);

        $query = "INSERT INTO users_nos_eventos (ref_user_id, ref_event_id) VALUES (?,?);";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, "ii", $id_user, $id_evento);
            if (mysqli_stmt_execute($stmt)) {
                $data['inserir'] = "sucesso";
            } else {
                $data['inserir'] = "erro";
            }
        } else {
            $data['inserir'] = "erro";
        }
    }else {
        $data['inserir'] = "sucesso";
    }
    

print json_encode($data);
