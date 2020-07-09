<?php
session_start();
require_once "../../../connections/connection.php";
require_once "../sc_check_admin.php";



if ($admin == 1) {


    $link = new_db_connection();

    $sucesso = 1;

    if (isset($_GET["id"]) && isset($_GET["nome"]) && isset($_GET["data"]) && isset($_GET["slots"]) && isset($_GET["descricao"]) && isset($_GET["criador"]) && isset($_GET["tipo"])) {


        $id = $_GET['id'];
        $nome = $_GET['nome'];
        $data = $_GET['data'];
        $slots =  $_GET['slots'];
        $descricao = $_GET['descricao'];
        $criador = $_GET['criador'];
        $tipo = $_GET['tipo'];
        echo $data;



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
    }

    if ($sucesso == 1) {


        $stmt = mysqli_stmt_init($link);



        $query1 = "UPDATE event SET name = ?, date = ?, slots = ?, short_description = ?, ref_creator_id = ?, ref_event_type_id = ?  WHERE id = ?";


        if (mysqli_stmt_prepare($stmt, $query1)) {

            mysqli_stmt_bind_param($stmt, 'ssisisi', $nome, $data, $slots, $descricao, $criador_id, $tipo_id, $id);

            if (mysqli_stmt_execute($stmt)) {

                mysqli_stmt_fetch($stmt);

                $msg = 8;
                $data = array();

                $row_result = array();
                $row_result["msgBool"] = true;
                $row_result["msg"] = $msg;
                $row_result["estado"] = "concluido";
                $data[] = $row_result;


                print json_encode($data);
                //header("Location: ../my_acc.php?msg=1");
                mysqli_stmt_close($stmt);
                mysqli_close($link);
            }
        } else {
            //algo deu errado
            echo "EROUUUUUUUUUUUUU";
            mysqli_stmt_close($stmt);
            mysqli_close($link);
            $_SESSION['msg'] =  true;

            //header("Location: ../my_acc.php?msg=3");
        }
    } else {
        $data = array();

        $row_result = array();
        $row_result["msgBool"] = true;
        $row_result["msg"] = $msg;
        $data[] = $row_result;


        print json_encode($data);
    }
} else {
    header("location: ../../../index.php");
}
