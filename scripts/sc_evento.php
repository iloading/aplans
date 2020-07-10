<?php
require_once "../connections/connection.php";

session_start();

$id_user = $_SESSION['id_user_aplans'];
$id_evento = $_GET['idEvento'];
$organizador = 0;
$user_participando = 0;
$data = array();


$link = new_db_connection();



/*------------------------------INTERFACE HOME----------------------*/
$stmt = mysqli_stmt_init($link);

$query = "SELECT event_type.url, ref_creator_id, name, date, slots, short_description, last_message_update FROM event INNER JOIN event_type ON event_type.id = ref_event_type_id WHERE event.id = ?";



if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id_evento);
    // Devemos validar também o resultado do execute!

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $tipoEvento, $criador, $nomeEvento, $dataEvento, $slots, $descricao, $ultimoUpdate);

        /* fetch values */

        while (mysqli_stmt_fetch($stmt)) {

            
            
            $dia = (int) date ('d', strtotime($dataEvento));
            $mes = date('m', strtotime($dataEvento));
            $hora = date ('H:i', strtotime($dataEvento));
            $ano = date('Y', strtotime($dataEvento));

            switch ($mes) {
                case '01':
                    $mes = 'janeiro';
                    break;
                case '02':
                    $mes = 'fevereiro';
                    break;
                case '03':
                    $mes = 'março';
                    break;
                case '04':
                    $mes = 'abril';
                    break;
                case '05':
                    $mes = 'maio';
                    break;
                case '06':
                    $mes = 'junho';
                    break;
                case '07':
                    $mes = 'julho';
                    break;
                case '08':
                    $mes = 'agosto';
                    break;
                case '09':
                    $mes = 'setembro';
                    break;
                case '10':
                    $mes = 'outubro';
                    break;
                case '11':
                    $mes = 'novembro';
                    break;
                case '12':
                    $mes = 'dezembro';
                    break;
                default:
                    # code...
                    break;
            }


            $row_result = array();
            $row_result["tipo"] = htmlspecialchars($tipoEvento);
            $row_result["criador"] = htmlspecialchars($criador);
            $row_result["nome"] = htmlspecialchars($nomeEvento);
            $row_result["diaEventoCriado"] = htmlspecialchars($dia);
            $row_result["mesEventoCriado"] = htmlspecialchars($mes);
            $row_result["horaEventoCriado"] = htmlspecialchars($hora);
            $row_result["anoEventoCriado"] = htmlspecialchars($ano);
            $row_result["slotsMax"] = htmlspecialchars($slots);
            $row_result["descricao"] = htmlspecialchars($descricao);
            $row_result["ultimoUpdate"] = htmlspecialchars($ultimoUpdate);

            $data['home'] = $row_result;

            
        }
        //Caso ocorra algum erro
        if (mysqli_stmt_num_rows($stmt) == 0) { 
            $row_result = "Ups, esse evento não existe";
            $data['home'] = $row_result;
            $evento_existe = false;

        }else {
            $evento_existe = true;
        }
        
        // print json_encode($data);
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

/*------------------------- INTERFACE PESSOAS ------------------------*/
if ($evento_existe == true) {
    
    $stmt = mysqli_stmt_init($link);

    $query = "SELECT ref_user_id, users.nome, users.url FROM users_nos_eventos INNER JOIN users ON ref_user_id = users.id WHERE ref_event_id = ?";



    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 'i', $id_evento);
        // Devemos validar também o resultado do execute!

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt, $id_user_evento, $nome_user_evento, $avatar_user);

            /* fetch values */
        
            while (mysqli_stmt_fetch($stmt)) {

            /*Se o utilizador que estiver a ser processado durante o ciclo for o criador do evento e se esse mesmo utilizador for aquele que está logado na aplicação, então essa pessoa é o organizador e teremos que dar display da div de organizador em html mais tarde*/
                if ($organizador == false && $id_user_evento == $criador && $id_user_evento == $id_user) {
                    $organizador = true;
                }
                /*Verificação parecida mas desta vez é para dar display na lista de participantes - havia outras formas de fazer xD */
                if ($id_user_evento == $criador) {
                    $user_organizador = true;
                }else {
                    $user_organizador = false;
                }


                if ($user_participando == false && $id_user_evento == $id_user) {
                    $user_participando = true;
                }

                /*Gravar o nome e id dos participantes*/
                $row_result2 = array();
                $row_result2["id_user_evento"] = htmlspecialchars($id_user_evento);
                $row_result2["nome_user_evento"] = htmlspecialchars($nome_user_evento);
                $row_result2["avatar_user"] = htmlspecialchars($avatar_user);
                $row_result2["user_organizador"] = htmlspecialchars($user_organizador);

                $data['pessoas'][] = $row_result2;
            }


            $numero_participantes = mysqli_stmt_num_rows($stmt);
            if ($numero_participantes == 0) {
                $sem_participantes = true;
                $data['info'] = "erro";
            }else {
                $sem_participantes = false;
            }

            if ($sem_participantes == false) {
                
            
                /*Gravar informação do evento como o numero de participantes, a lotação e se o user logado é ou não o organizador*/
                $row_result_info = array();
                
                if ($numero_participantes < $slots) {
                    $lotacao_evento = "disponivel";
                } elseif (mysqli_stmt_num_rows($stmt) == $slots) {
                    $lotacao_evento = "cheio";
                }

                $row_result_info["organizador"] = htmlspecialchars($organizador);
                $row_result_info["num_participantes"] = htmlspecialchars($numero_participantes);
                $row_result_info["lotacao_evento"] = htmlspecialchars($lotacao_evento);
                $row_result_info["user_participando"] = htmlspecialchars($user_participando);

                $data['info'] = $row_result_info;

            }
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
}


print json_encode($data);