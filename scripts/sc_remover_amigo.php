<?php 
    require_once "../connections/connection.php";

    session_start();

    $id_user = $_SESSION['id_user_aplans'];
    $data = array();

    $id_user_remover = $_GET['id_remover'];


    $link = new_db_connection();

/*----------------- remover users ----------------*/

$stmt = mysqli_stmt_init($link);

$query = "DELETE FROM amigos WHERE (user_id1= ? AND user_id2 = ?) OR (user_id1= ? AND user_id2 = ?)";



if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, "iiii", $id_user_remover,$id_user, $id_user, $id_user_remover);
    // Devemos validar também o resultado do execute!

    if (mysqli_stmt_execute($stmt)) {

        $data['amizade_removida'] = 'sucesso';
       

        mysqli_stmt_close($stmt);
    } 
} 

    print json_encode($data);
