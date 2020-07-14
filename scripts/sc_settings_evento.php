<?php 
    require_once "../connections/connection.php";

    session_start();

    if (isset($_SESSION['id_user_aplans'])) {

        $sucesso = 1;
        $row_results_erro= array();
        $criador = $_SESSION['id_user_aplans'];
        $num_tarefas = $_GET['numTarefas'];

        /*Verificações para se algum campo não estiver preenchido,*/

        
        if (isset($_GET['nomeEvento']) && empty(trim($_GET['nomeEvento'])) == false) {
            $nome = $_GET['nomeEvento'];
            $row_results_erro['nomeEvento'] = htmlspecialchars($_GET['nomeEvento']);
        } else {
            $sucesso = 0;
        }

        if (isset($_GET['idTipoEvento']) && empty(trim($_GET['idTipoEvento'])) == false) {
            $idTipoEvento = $_GET['idTipoEvento'];
            $row_results_erro['idTipoEvento'] = htmlspecialchars($_GET['idTipoEvento']);
        } else {
            $sucesso = 0;
        }

        if (isset($_GET['dataEvento']) && empty(trim($_GET['dataEvento'])) == false) {
            $dataEvento = $_GET['dataEvento'];
            $row_results_erro['dataEvento'] = htmlspecialchars($_GET['dataEvento']);
        } else {
            $sucesso = 0;
        }

        if (isset($_GET['localEvento']) && empty(trim($_GET['localEvento'])) == false) {
            $localEvento = $_GET['localEvento'];
            $row_results_erro['localEvento'] = htmlspecialchars($_GET['localEvento']);
        } else {
            $sucesso = 0;
        }

        if (isset($_GET['descricaoEvento']) && empty(trim($_GET['descricaoEvento'])) == false) {
            $descricaoEvento = $_GET['descricaoEvento'];
            $row_results_erro['descricaoEvento'] = htmlspecialchars($_GET['descricaoEvento']);
        } else {
            $sucesso = 0;
        }

        if (isset($_GET['participantesEvento']) && empty(trim($_GET['participantesEvento'])) == false) {
            /*o nº participantes tem que estar entre 2 e 250*/
            if ($_GET['participantesEvento'] < 2 || $_GET['participantesEvento'] > 250) {
                $sucesso = 0;
            }else {
                $slotsMax = $_GET['participantesEvento'];
                $row_results_erro['participantesEvento'] = htmlspecialchars($_GET['participantesEvento']);
            }
            
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
                    
                    // $_SESSION['msg'] = 1;
                    

                    /*Precisamos do id criado automaticamente na BD para a seguir inserir */
                    $id_evento_criado = mysqli_insert_id($link);
                    $data['criarEvento'] = "sucesso";
                    $data['id_evento_criado'] = $id_evento_criado;

                    mysqli_stmt_close($stmt);
                }else {
                    $data['criarEvento'] = "erro";
                }
            }else {
                $data['criarEvento'] = "erro";
            }



            $stmt = mysqli_stmt_init($link);

            $query = "INSERT INTO users_nos_eventos(ref_user_id, ref_event_id) VALUES (?,?)";


            if (mysqli_stmt_prepare($stmt, $query)) {

                mysqli_stmt_bind_param($stmt, "ii", $criador, $id_evento_criado);

                if (mysqli_stmt_execute($stmt)) {

                    mysqli_stmt_close($stmt);
                }
            }


            /*Para cada tarefa que tenha sido inserida, vamos fazer um Insert na BD*/
            for ($i = 1; $i <= $num_tarefas; $i++) {

                // '&tarefa"+m+"nome="+nomeTarefa+"&tarefa"+m+"descricao="+descTarefa+"&tarefa"+m+"cor="+corTarefa';

                $nome_tarefa = $_GET['tarefa' . $i . 'nome'];
                $descricao_tarefa = $_GET['tarefa' . $i . 'descricao'];
                $cor_tarefa = $_GET['tarefa' . $i . 'cor'];

                $stmt = mysqli_stmt_init($link);

                $query = "INSERT INTO tasks_do_evento(ref_event_id, name, short_description, cor) VALUES (?,?,?,?)";


                if (mysqli_stmt_prepare($stmt, $query)) {

                    mysqli_stmt_bind_param($stmt, "isss", $id_evento_criado, $nome_tarefa, $descricao_tarefa, $cor_tarefa);

                    if (mysqli_stmt_execute($stmt)) {

                        mysqli_stmt_close($stmt);
                    } else {
                        $data['criarTarefaEvento'] = "erro";
                    }
                } else {
                    $data['criarTarefaEvento'] = "erro";
                }
            }

            






        /*Se faltar algum parametro mostra o erro na pág home (só se o JS for manipulado por um eventual atacante)*/ 
        }else {
            // $_SESSION['msg'] = 2;
            $data['criarEvento'] = "erro";
        }

        
        print json_encode($data);
    }