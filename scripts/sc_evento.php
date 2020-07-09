<?php
require_once "../connections/connection.php";

session_start();

$id_user = $_SESSION['id_user_aplans'];
$id_evento = $_GET['idEvento'];

$data = array();


$link = new_db_connection();

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
            $row_result = "vazio";
            $data['home'] = $row_result;
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


print json_encode($data);