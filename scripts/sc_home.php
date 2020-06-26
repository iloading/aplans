<?php 
require_once "../connections/connection.php";

session_start();
$id_user = $_SESSION['id_user_aplans'];


$link = new_db_connection();

$stmt = mysqli_stmt_init($link);

$query = "SELECT name, date FROM event WHERE ref_creator_id = ?";
$data = array();
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
           
            $data[] = $row_result;
        }

        print json_encode($data);

        

    
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
?>