<?php 
    require_once "../connections/connection.php";

    session_start();

    if (isset($_SESSION['id_user_aplans'])) {

        $sucesso = 1;
        $row_results_erro= array();
        $criador = $_SESSION['id_user_aplans'];

        /*Verificações para se algum campo não estiver preenchido,*/

        // if (isset($_GET['numTarefas'])) {
        //     $num_tarefas = $_GET['numTarefas'];
        //     $row_results_erro['num_tarefas'] = htmlspecialchars($_GET['numTarefas']) ;
        // }else {
        //     $sucesso = 0;
        // }

        if (isset($_GET['nomeEvento']) && empty($_GET['nomeEvento']) == false) {
            $nome = $_GET['nomeEvento'];
            $row_results_erro['nomeEvento'] = htmlspecialchars($_GET['nomeEvento']);
        } else {
            $sucesso = 0;
        }

        if (isset($_GET['idTipoEvento']) && empty($_GET['idTipoEvento']) == false) {
            $idTipoEvento = $_GET['idTipoEvento'];
            $row_results_erro['idTipoEvento'] = htmlspecialchars($_GET['idTipoEvento']);
        } else {
            $sucesso = 0;
        }

        if (isset($_GET['dataEvento']) && empty($_GET['dataEvento']) == false) {
            $dataEvento = $_GET['dataEvento'];
            $row_results_erro['dataEvento'] = htmlspecialchars($_GET['dataEvento']);
        } else {
            $sucesso = 0;
        }

        if (isset($_GET['localEvento']) && empty($_GET['localEvento']) == false) {
            $localEvento = $_GET['localEvento'];
            $row_results_erro['localEvento'] = htmlspecialchars($_GET['localEvento']);
        } else {
            $sucesso = 0;
        }

        if (isset($_GET['descricaoEvento']) && empty($_GET['descricaoEvento']) == false) {
            $descricaoEvento = $_GET['descricaoEvento'];
            $row_results_erro['descricaoEvento'] = htmlspecialchars($_GET['descricaoEvento']);
        } else {
            $sucesso = 0;
        }

        if (isset($_GET['participantesEvento']) && empty($_GET['participantesEvento']) == false) {
            $slotsMax = $_GET['participantesEvento'];
            $row_results_erro['participantesEvento'] = htmlspecialchars($_GET['participantesEvento']);
        } else {
            $sucesso = 0;
        }

        if ($sucesso == 1) {
        
            $data = array();


            $link = new_db_connection();

            $stmt = mysqli_stmt_init($link);

            $query = "INSERT INTO event (ref_event_type_id, ref_creator_id, name, date, slots, short_description, local) VALUES (?,?,?,?,?,?,?)";

             
            if (mysqli_stmt_prepare($stmt, $query)) {
            
                mysqli_stmt_bind_param($stmt, "iississ", $idTipoEvento, $criador, $nome, $dataEvento, $slotsMax, $descricaoEvento, $localEvento);

                if (mysqli_stmt_execute($stmt)) {

                    $_SESSION['msg'] = 1;
                    $data['criarEvento']= "sucesso";
                    

                }else {
                    $data['criarEvento'] = "erro";
                }
            }else {
                $data['criarEvento'] = "erro";
            }

        /*Se faltar algum parametro*/ 
        }else {
            $_SESSION['msg'] = 2;
            $data['criarEvento'] = "erro";
        }

        
        print json_encode($data);
    }