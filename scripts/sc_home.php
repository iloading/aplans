<?php 
require_once "../connections/connection.php";

session_start();
$id_user = $_SESSION['id_user_aplans'];
$data = array();

$link = new_db_connection();

$stmt = mysqli_stmt_init($link);

$query = "SELECT name, date FROM event WHERE ref_creator_id = ?";



if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id_user);
    // Devemos validar também o resultado do execute!

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $nomeEventoCriado, $dataEventoCriado);

        /* fetch values */
        
        while (mysqli_stmt_fetch($stmt)) {
            $row_result = array();
            $row_result["nomeEventoCriado"] = htmlspecialchars($nomeEventoCriado);
            $row_result["dataEventoCriado"] = htmlspecialchars($dataEventoCriado);
            
            
            $data['created'][] = $row_result;
        }
        // print json_encode($data);
        

        

    
        mysqli_stmt_close($stmt);
    }else {
        $row_result["erro"] = '1';
        $data[] = $row_result;
        print json_encode($data);
    }
}else {
    $row_result["erro"] = '2';
    $data[] = $row_result;
    print json_encode($data);
}






//SELECT event.id, event_type.url FROM event INNER JOIN event_type ON ref_event_type_id = event_type.id WHERE ref_event_type_id = ?

$stmt = mysqli_stmt_init($link);

$query = "SELECT ref_event_id, event.name, event_type.url FROM users_nos_eventos INNER JOIN event ON ref_event_id = event.id INNER JOIN event_type ON event_type.id = ref_event_type_id WHERE ref_user_id = ?";



if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id_user);
    // Devemos validar também o resultado do execute!

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $id_evento, $nome_evento, $icon_url);

        /* fetch values */

        while (mysqli_stmt_fetch($stmt)) {
            $row_result = array();
            $row_result["id_evento"] = htmlspecialchars($id_evento);
            $row_result["nome_evento"] = htmlspecialchars($nome_evento);
            $row_result["icon_tipo"] = htmlspecialchars($icon_url);

            $data["upcoming"][] = $row_result;
        }

        //print json_encode($data);
        



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










$stmt = mysqli_stmt_init($link);

$query = "SELECT users.nome,users.url FROM users INNER JOIN amigos ON users.id = user_id1  WHERE user_id2 = ?";



if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id_user);
    // Devemos validar também o resultado do execute!

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $nomeAmigo, $imagemAmigo);

        /* fetch values */

        while (mysqli_stmt_fetch($stmt)) {
            $row_result = array();
            $row_result["nomesAmigos"] = htmlspecialchars($nomeAmigo);
            $row_result["imagem_amigo"] = htmlspecialchars($imagemAmigo);
            $data["amigos"][] = $row_result;
        }

        //print json_encode($data);




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



$stmt = mysqli_stmt_init($link);

$query = "SELECT users.nome,users.url FROM users INNER JOIN amigos ON users.id = user_id2  WHERE user_id1 = ?";



if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id_user);
    // Devemos validar também o resultado do execute!

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $nomeAmigo, $imagemAmigo);

        /* fetch values */

        while (mysqli_stmt_fetch($stmt)) {
            $row_result = array();
            $row_result["nomesAmigos"] = htmlspecialchars($nomeAmigo);
            $row_result["imagem_amigo"] = htmlspecialchars($imagemAmigo);
            $data["amigos"][] = $row_result;
        }

        //
        print json_encode($data);




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





?>