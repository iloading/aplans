<?php
    require_once '../../connections/connection.php';

    // Create a new DB connection
    $link = new_db_connection();

    

    
    if (isset($_GET['items']) && trim($_GET['items']) != "") { // Se houver um limite de itens definido
        $itemsPorPag = $_GET['items'];
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            
        }else {
            $search = "";
        }
        $wildcard = "%$search%";
        

        /*PAGINAÇÃO*/ 
        $page = $_GET['page'];
        $pagAtual = $page;
        $page -=1;
        // $previous_btn = true;
        // $next_btn = true;
        // $first_btn = true;
        // $last_btn = true;
        $start = $page * $itemsPorPag;


        /* create a prepared statement */
        $stmt = mysqli_stmt_init($link);


        if ($search != "") {
        $query = "SELECT COUNT(*) AS count FROM event INNER JOIN users ON users.id = ref_creator_id INNER JOIN event_type ON event_type.id = ref_event_type_id
                  WHERE name LIKE ? OR date LIKE ? OR slots LIKE ? OR short_description LIKE ? OR users.nome LIKE ? OR event_type.type LIKE ?";
        }else {
            $query = "SELECT COUNT(*) AS count FROM event"; // Total records
        }
        
        if (mysqli_stmt_prepare($stmt, $query)) {
            if ($search != "") {
                mysqli_stmt_bind_param($stmt, 'ssssss',  $wildcard,  $wildcard,  $wildcard,  $wildcard,  $wildcard,  $wildcard);
            }
            if (mysqli_stmt_execute($stmt)) {

                mysqli_stmt_bind_result($stmt, $resultados);

                mysqli_stmt_fetch($stmt);
                    $no_de_pag = ceil($resultados / $itemsPorPag);

                
                //print json_encode($data);


            }
        }
        mysqli_stmt_close($stmt);
        /*/.PAGINAÇÃO*/ 

        if (isset($_GET['col']) && trim($_GET['col']) != "" && isset($_GET['ord']) && trim($_GET['ord']) != "") { 
            $ordenarPorCol = $_GET['col'];
            $ordem= $_GET['ord'];
            
            switch ($ordenarPorCol) {
                case 'nome':
                    $tabela = "name";
                    break;
                case 'data':
                $tabela = "date";
                    break;
                case 'slots':
                $tabela = "slots";
                    break;
                case 'descricao':
                $tabela = "short_description";
                    break;
                case 'criador':
                    $tabela = "users.nome";
                    break;
                case 'tipo':
                $tabela = "event_type.type";
                    break;

                default:
                $tabela = "name";
                    break;
            }
            switch ($ordem) {
                case 'ASC':
                    $ordenacao = 'ASC';
                    break;
                
                default:
                    $ordenacao = 'DESC';
                    break;
            }
            
            if ($search != "") { // SE HOUVER ALGO NA BARRA DE PESQUISA
            $query = "SELECT event.id, name, date, slots, short_description, users.email, event_type.type
                        FROM event
                        INNER JOIN users ON users.id = ref_creator_id INNER JOIN event_type ON event_type.id = ref_event_type_id
                         WHERE name LIKE ? OR date LIKE ? OR slots LIKE ? OR short_description LIKE ? OR users.email LIKE ? OR event_type.type LIKE ?
                        ORDER BY " . $tabela . " " . $ordenacao . " 
                        LIMIT ?, ?";
            
            }else {// SE NÃO HOUVER ALGO NA BARRA DE PESQUISA
            $query = "SELECT event.id, name, date, slots, short_description, users.email, event_type.type
                        FROM event
                        INNER JOIN users ON users.id = ref_creator_id INNER JOIN event_type ON event_type.id = ref_event_type_id
                        ORDER BY " . $tabela . " " . $ordenacao . " 
                        LIMIT ?, ?";
                
            }

        }else { //SE POR ALGUMA RAZÃO NÃO HOUVER NADA NO PARAMETRO DA COLUNA OU DA ORDENAÇÃO
            $query = "SELECT event.id, name, date, slots, short_description, users.email, event_type.type
                        FROM event
                        INNER JOIN users ON users.id = ref_creator_id INNER JOIN event_type ON event_type.id = ref_event_type_id
                        LIMIT ?, ?";
                
        }
    
    }else { // SE POR ALGUMA RAZÃO NÃO HOUVER NADA NO PARAMETRO DO LIMITE DE ITEMS POR PÁGINA
        $query = "SELECT event.id, name, date, slots, short_description, users.email, event_type.type
                        FROM event
                        INNER JOIN users ON users.id = ref_creator_id INNER JOIN event_type ON event_type.id = ref_event_type_id";
                       
    }

    /* create a prepared statement */
    $stmt = mysqli_stmt_init($link);
    if (mysqli_stmt_prepare($stmt, $query)) {

        if (isset($_GET['items']) && trim($_GET['items']) != "") {
            if (isset($_GET['col']) && trim($_GET['col']) != "" && isset($_GET['ord']) && trim($_GET['ord']) != "") {    
                if ($search != "") {

                mysqli_stmt_bind_param($stmt, 'ssssssii',  $wildcard,  $wildcard,  $wildcard,  $wildcard,  $wildcard,  $wildcard, $start, $itemsPorPag );

                }else {

                mysqli_stmt_bind_param($stmt, 'ii', $start, $itemsPorPag);
                }            
            }else {

                mysqli_stmt_bind_param($stmt, 'ii', $start, $itemsPorPag);
            }
            


        }
        /* execute the prepared statement */
        if (mysqli_stmt_execute($stmt)){
            /* bind result variables */
            
            mysqli_stmt_bind_result($stmt,$id, $nome, $data, $slots, $desc, $criador_email, $tipo_evento);

            /* fetch values */
            $data1 = array();
            while (mysqli_stmt_fetch($stmt)) {

                
              $data_adaptada= date ('Y-m-d\TH:i:s', strtotime($data));
              $dia = date ('Y-m-d', strtotime($data));
              $hora = date ('H:i:s', strtotime($data));
                

                $row_result = array();
                $row_result["id"] = htmlspecialchars($id);
                $row_result["nome"] = htmlspecialchars($nome);
                $row_result["data"] = htmlspecialchars($data_adaptada);
                $row_result["hora"] = htmlspecialchars($hora);
                $row_result["dia"] = htmlspecialchars($dia);
                $row_result["slots"] = htmlspecialchars($slots);
                $row_result["descricao"] = htmlspecialchars($desc);
                $row_result["criador"] = htmlspecialchars($criador_email);
                $row_result["tipo"] = htmlspecialchars($tipo_evento);
                //$row_result["noPaginas"] = htmlspecialchars($no_de_pag);
                $data1[]= $row_result;

            }
            
            print json_encode($data1);
            
           
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        /* close statement */
        mysqli_stmt_close($stmt);

        
    } else {
        echo "Error: " . mysqli_error($link);
    }

    /* close connection */
    mysqli_close($link);
