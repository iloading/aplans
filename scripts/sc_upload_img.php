<?php
require_once "../connections/connection.php";

session_start();
$data = array();


    $sucesso = 1;
    $id_user = $_SESSION['id_user_aplans'];



if($_FILES["file"]["error"] > 0){

    $data["avatar"] = 'error';

}else{

    if(move_uploaded_file($_FILES['file']['tmp_name'],'../images/upload/'.$_FILES["file"]["name"])){

        $data['avatar'] = 'sucesso';
    }

}





