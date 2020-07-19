<?php
require_once "../connections/connection.php";

session_start();
$data_display = array();

if (isset($_SESSION['id_user_aplans'])) {

    $sucesso = 1;
    $row_results_erro = array();


    $data = date('Y-m-d');
    $hora = date('H:i');
    $dataAtual = $data . 'T' . $hora;
  
    


    if(isset($_GET['tipoEventoId']) && isset($_GET['nome_evento']) && isset($_GET['data_input']) && isset($_GET['local_evento']) && isset($_GET['descricao_evento']) && isset($_GET['participantes']) && isset($_GET['idEvento'])){

        $idEvento = $_GET['idEvento'];

        if ($_GET['tipoEventoId'] != "") {
           
            $imgTipoEvento = $_GET['tipoEventoId'];
            
        }

        if ($_GET['nome_evento'] != "") {
           
            $evento_nome = $_GET['nome_evento'];
            
        }else {
            $sucesso = 0;
            $row[] = '14';
        }

        if ($_GET['data_input'] != "") {

            if ($_GET['data_input'] > $dataAtual) {
                $evento_data = $_GET['data_input'];
            }else{
                $sucesso = 0;
                $row[] = '20';
            }
   
        }else {
            $sucesso = 0;
            $row[] = '15';
        }

        if ($_GET['local_evento'] != "") {
           
            $evento_local = $_GET['local_evento'];
            
        }else {
            $sucesso = 0;
            $row[] = '16';
        }

        if ($_GET['descricao_evento'] != "") {
           
            $evento_descricao = $_GET['descricao_evento'];
            
        }else {
            $sucesso = 0;
            $row[] = '17';
        }
        
        if ($_GET['participantes'] != "") {

            if ($_GET['participantes'] >= 2 && $_GET['participantes'] <= 250) {
                $evento_participantes = $_GET['participantes'];
            }else{
                $sucesso = 0;
                $row[] = '18';
            }
           
            
        }else {
            $sucesso = 0;
            $row[] = '18';
        }
        

    }else {
        $sucesso = 0;
    }


    if ($sucesso == 1) {

    
        $link = new_db_connection();

    

        $stmt = mysqli_stmt_init($link);

        $query = "UPDATE event SET name = ?, date = ?, local = ?, short_description = ?, slots = ?, ref_event_type_id = ? WHERE event.id = ?";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'ssssiii',  $evento_nome ,  $evento_data , $evento_local , $evento_descricao , $evento_participantes, $imgTipoEvento, $idEvento);
            if (mysqli_stmt_execute($stmt)) {

                $data_display['update_Settings'] = 'sucesso';
                
            }
        }


       
    }else{

        $data_display['erro'] = $row;
       


    }

    print json_encode($data_display);
}




