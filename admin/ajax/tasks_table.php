<?php
    require_once '../../connections/connection.php';

    // Create a new DB connection
    $link = new_db_connection();



    
    if (isset($_GET['items']) && trim($_GET['items']) != "") { // Se houver um limite de itens definido
   
        $itemsPorPag = $_GET['items'];
        $search = $_GET['search'];
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
        $query = "SELECT COUNT(*) AS count FROM tasks INNER JOIN event_type ON ref_event_type_id = event_type.id
                  WHERE name LIKE ? OR filter LIKE ? OR short_description LIKE ? OR event_type.type LIKE ?";
        }else {
            $query = "SELECT COUNT(*) AS count FROM tasks"; // Total records
        }
        
        if (mysqli_stmt_prepare($stmt, $query)) {
            if ($search != "") {
                mysqli_stmt_bind_param($stmt, 'ssss',  $wildcard,  $wildcard,  $wildcard,  $wildcard);
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
                    $tabela = "nome";
                    break;

                case 'filtro':
                $tabela = "filtro";
                    break;

                case 'tipo':
                $tabela = "tipo";
                break;

                case 'descricao':
                $tabela = "descricao";
                    break;
                
                default:
                $tabela = "nome";
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
            $query = "SELECT name, filter, short_description
                        FROM tasks
                        INNER JOIN event_type ON ref_event_type_id = event_type.id 
                        WHERE name LIKE ? OR filter LIKE ? OR short_description LIKE ? OR event_type.type LIKE ?
                        ORDER BY " . $tabela . " " . $ordenacao . " 
                        LIMIT ?, ?";
            
            }else {// SE NÃO HOUVER ALGO NA BARRA DE PESQUISA
            $query = "SELECT name, filter, short_description FROM tasks INNER JOIN event_type ON ref_event_type_id = event_type.id ORDER BY " . $tabela . " " . $ordenacao . " LIMIT ?, ?";
                
            }

        }else { //SE POR ALGUMA RAZÃO NÃO HOUVER NADA NO PARAMETRO DA COLUNA OU DA ORDENAÇÃO
            $query = "SELECT name, filter, short_description FROM tasks INNER JOIN event_type ON ref_event_type_id = event_type.id LIMIT ?, ?";
        }
    
    }else { // SE POR ALGUMA RAZÃO NÃO HOUVER NADA NO PARAMETRO DO LIMITE DE ITEMS POR PÁGINA
        $query = "SELECT name, filter, short_description FROM tasks INNER JOIN event_type ON ref_event_type_id = event_type.id";
    }

    /* create a prepared statement */
    $stmt = mysqli_stmt_init($link);
    if (mysqli_stmt_prepare($stmt, $query)) {

        if (isset($_GET['items']) && trim($_GET['items']) != "") {
            if (isset($_GET['col']) && trim($_GET['col']) != "" && isset($_GET['ord']) && trim($_GET['ord']) != "") {    
                if ($search != "") {

                mysqli_stmt_bind_param($stmt, 'sssii',  $wildcard,  $wildcard,  $wildcard, $start, $itemsPorPag );

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
            mysqli_stmt_bind_result($stmt, $nome, $filtro, $descricao);

            /* fetch values */
            $data = array();
            while (mysqli_stmt_fetch($stmt)) {
                $row_result = array();
                $row_result["nome"] = htmlspecialchars($nome);
                $row_result["filtro"] = htmlspecialchars($filtro);
                $row_result["tipo"] = htmlspecialchars($tipo);
                $row_result["descricao"] = htmlspecialchars($descricao);
                $row_result["noPaginas"] = htmlspecialchars($no_de_pag);
                $data[] = $row_result;

            }
            
            print json_encode($data);
            
           
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