<?php 
    require_once "../connections/connection.php";

    session_start();

    $id_user = $_SESSION['id_user_aplans'];
    $id_evento = $_GET['idEvento'];
    $data = array();






        $link = new_db_connection();

        /*----------------- VERIFICAR SE O USER A REMOVER É O CRIADOR DO EVENTO ----------------*/

        $stmt = mysqli_stmt_init($link);

        $query = "SELECT ref_creator_id FROM event WHERE id = ?";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, "i", $id_evento);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $id_criador);
                mysqli_stmt_fetch($stmt);
                if ($id_criador == $id_user) {
                    $is_creador = 1;
                    $data['criador'] = 1;
                }else {
                    $is_creador = 0;
                    $data['criador'] = 0;
                }
                
            } 
        }


        if($is_creador == 0) {
            $link = new_db_connection();

            /*----------------- REMOVER O USER LOGADO DO EVENTO SELECIONADO ----------------*/

            $stmt = mysqli_stmt_init($link);

            $query = "DELETE FROM users_nos_eventos WHERE ref_user_id= ? AND ref_event_id=?";

            if (mysqli_stmt_prepare($stmt, $query)) {
                mysqli_stmt_bind_param($stmt, "ii", $id_user, $id_evento);
                if (mysqli_stmt_execute($stmt)) {
                    $data['abandonar'] = "sucesso";
                } else {
                    $data['abandonar'] = "erro";
                }
            } else {
                $data['abandonar'] = "erro";
            }

        }
    
print json_encode($data);
