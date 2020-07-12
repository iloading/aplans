<?php 
    require_once "../connections/connection.php";

    session_start();

    $id_user = $_SESSION['id_user_aplans'];
    $data = array();


    $link = new_db_connection();

    /*----------------- Ir buscar os tipos de Eventos à BD ----------------*/

    $stmt = mysqli_stmt_init($link);

    $query = "SELECT id, type, url FROM event_type";

    if (mysqli_stmt_prepare($stmt, $query)) { 
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt, $id, $type, $url);


            while (mysqli_stmt_fetch($stmt)) {

                $row_result = array();
                $row_result["nome"] = htmlspecialchars($type);
                $row_result["id"] = htmlspecialchars($id);
                $row_result["url"] = htmlspecialchars($url);
                
                $data['tipoEvento'][] = $row_result;

            }
        }
    }

    print json_encode($data);


?>