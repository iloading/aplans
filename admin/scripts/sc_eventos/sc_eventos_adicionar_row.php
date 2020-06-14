<?php
require_once "../../../connections/connection.php";
require_once "../../scripts/sc_validate_input.php";
session_start();


$sucesso = 1;
if (isset($_GET["nome"]) && isset($_GET["data"]) && isset($_GET["slots"]) && isset($_GET["descricao"]) && isset($_GET["criador"]) && isset($_GET["tipo"])) {


        $nome = $_GET['nome'];
        $data = $_GET['data'];
        $slots =  $_GET['slots'];
        $descricao = $_GET['descricao'];
        $criador = $_GET['criador'];
        $tipo = $_GET['tipo'];

        
    $stmt = mysqli_stmt_init($link);
    $query = "SELECT users.id FROM users INNER JOIN event ON users.id = event.ref_creator_id WHERE users.email = ? ";

    if (mysqli_stmt_prepare($stmt, $query)) {

        mysqli_stmt_bind_param($stmt, 's', $criador);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt, $criador_id);

            mysqli_stmt_fetch($stmt);

            //header("Location: ../my_acc.php?msg=1");
            mysqli_stmt_close($stmt);
        }
    } else {
        //algo deu errado
        mysqli_stmt_close($stmt);
        mysqli_close($link);
        $_SESSION['msg'] =  true;

        //header("Location: ../my_acc.php?msg=3");
    }

    $stmt = mysqli_stmt_init($link);
    $query = "SELECT event_type.id FROM event_type INNER JOIN event ON event_type.id = event.ref_event_type_id WHERE event_type.type = ? ";

    if (mysqli_stmt_prepare($stmt, $query)) {

        mysqli_stmt_bind_param($stmt, 's', $tipo);

        if (mysqli_stmt_execute($stmt)) {

            mysqli_stmt_bind_result($stmt, $tipo_id);
            mysqli_stmt_fetch($stmt);




            //header("Location: ../my_acc.php?msg=1");
            mysqli_stmt_close($stmt);
        }
    } else {
        //algo deu errado
        mysqli_stmt_close($stmt);
        mysqli_close($link);
        $_SESSION['msg'] =  true;

        //header("Location: ../my_acc.php?msg=3");
    }

}else { //Se não for inserido um dos valores obrigatórios
    $sucesso = 0;
    $msg = 0;
}





    // if ($emailExiste == true) {
    //     $sucesso= 0;
    //     $msg = 5;
    //     echo "email";
    // }


if ($sucesso == 1) {
        
        $stmt = mysqli_stmt_init($link);

        $query = "INSERT INTO events (nome, data, slots, descricao ,ref_creator_id, ref_event_type_id) VALUES (?,?,?,?,?,?)";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'sissii', $nome, $data, $slots, $descricao, $criador_id, $tipo_id);

            
            if (mysqli_stmt_execute($stmt)) {
                
                $msg = 7;

                $data = array();

                $row_result = array();
                $row_result["msgBool"] = true;
                $row_result["msg"] = $msg;
                $data[0] = $row_result;

                print json_encode($data);
                
                //mysqli_stmt_close($stmt);

               

            } else {
                // Acção de erro caso o registo falhe
                echo "Error:" . mysqli_error($link);
                //mysqli_close($link);
            }
        } else {
            echo "erro";
        }
    

}else {
    $data= array();
    
    $row_result = array();
    $row_result["msgBool"] = true;
    $row_result["msg"] = $msg;
    $data[0] = $row_result;

    print json_encode($data);
}









