<?php
require_once "../connections/connection.php";

session_start();
$data = array();


    $sucesso = 1;
    $id_user = $_SESSION['id_user_aplans'];
    $target_dir ="../images/upload/";
    $target_file = $target_dir.basename($_FILES["file"]["name"]);
    $tipoImg = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



if($_FILES["file"]["error"] > 0){

    $data["avatar"] = 'error';





}else{

    
 
    if ($_FILES["file"]["size"] > 500000) {
        //echo "Sorry, your file is too large.";
        $row = '11';
        $sucesso = 0;
    }


    if ($tipoImg != "jpg" && $tipoImg != "png" && $tipoImg != "jpeg" && $tipoImg != "gif") {
        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $row = '11';
        $sucesso = 0;
    }



   
    if ($sucesso == 1) {

        $temp = explode(".", $_FILES["file"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
       

        if(move_uploaded_file($_FILES['file']['tmp_name'],'../images/upload/'. $newfilename)){
            $data['avatar'] = 'sucesso';
        }

        
        $path = "/"."upload/".$newfilename;

        $link = new_db_connection();

        $stmt = mysqli_stmt_init($link);

        $query = "UPDATE users SET url = ? WHERE users.id = ?";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'si', $path, $id_user);
            if (mysqli_stmt_execute($stmt)) {



                $data['updatePerfil'] = 'sucesso';
            }
        }





    }else{
        $data['erro'] = $row;
    }

    print json_encode($data);

}







