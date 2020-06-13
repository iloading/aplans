<?php
    require_once '../../connections/connection.php';

    // Create a new DB connection
    $link = new_db_connection();

    /* create a prepared statement */
    $stmt = mysqli_stmt_init($link);

    
    if (isset($_GET['items']) && trim($_GET['items']) != "") { // Se houver um limite de itens definido
        $itemsPorPag = $_GET['items'];
        $search = $_GET['search'];
        $wildcard = "%$search%";
        
        if (isset($_GET['col']) && trim($_GET['col']) != "" && isset($_GET['ord']) && trim($_GET['ord']) != "") { 
            $ordenarPorCol = $_GET['col'];
            $ordem= $_GET['ord'];
            
            switch ($ordenarPorCol) {
                case 'nome':
                    $tabela = "nome";
                    break;
                case 'email':
                $tabela = "email";
                    break;
                case 'role':
                $tabela = "role";
                    break;
                case 'telemovel':
                $tabela = "telemovel";
                    break;
                case 'morada':
                $tabela = "morada";
                    break;
                case 'codigo_postal':
                $tabela = "codigo_postal";
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
            $query = "SELECT nome, email, telemovel, morada, codigo_postal, role 
                        FROM users
                        INNER JOIN roles ON roles.id = ref_roles_id 
                        WHERE nome LIKE ? OR email LIKE ? OR telemovel LIKE ? OR morada LIKE ? OR codigo_postal LIKE ? OR role LIKE ?
                        ORDER BY " . $tabela . " " . $ordenacao . " 
                        LIMIT ?";
            
            }else {// SE NÃO HOUVER ALGO NA BARRA DE PESQUISA
            $query = "SELECT nome, email, telemovel, morada, codigo_postal, role FROM users INNER JOIN roles ON roles.id = ref_roles_id ORDER BY " . $tabela . " " . $ordenacao . " LIMIT ?";
                
            }

        }else { //SE POR ALGUMA RAZÃO NÃO HOUVER NADA NO PARAMETRO DA COLUNA OU DA ORDENAÇÃO
            $query = "SELECT nome, email, telemovel, morada, codigo_postal, role FROM users INNER JOIN roles ON roles.id = ref_roles_id LIMIT ?";
        }
    
    }else { // SE POR ALGUMA RAZÃO NÃO HOUVER NADA NO PARAMETRO DO LIMITE DE ITEMS POR PÁGINA
        $query = "SELECT nome, email, telemovel, morada, codigo_postal, role FROM users INNER JOIN roles ON roles.id = ref_roles_id";
    }
    

    if (mysqli_stmt_prepare($stmt, $query)) {
        if (isset($_GET['items']) && trim($_GET['items']) != "") {
            if (isset($_GET['col']) && trim($_GET['col']) != "" && isset($_GET['ord']) && trim($_GET['ord']) != "") {    
                if ($search != "") {
                mysqli_stmt_bind_param($stmt, 'ssssssi',  $wildcard,  $wildcard,  $wildcard,  $wildcard,  $wildcard,  $wildcard, $itemsPorPag );
                }else {
                mysqli_stmt_bind_param($stmt, 'i',  $itemsPorPag);
                }            
            }else {
                mysqli_stmt_bind_param($stmt, 'i', $itemsPorPag);
            }
            


        }
        /* execute the prepared statement */
        if (mysqli_stmt_execute($stmt)){
            /* bind result variables */
            mysqli_stmt_bind_result($stmt, $nome, $email, $telemovel, $morada, $cp, $role);

            /* fetch values */
            $data = array();
            while (mysqli_stmt_fetch($stmt)) {
                $row_result = array();
                $row_result["nome"] = htmlspecialchars($nome);
                $row_result["email"] = htmlspecialchars($email);
                $row_result["telemovel"] = htmlspecialchars($telemovel);
                $row_result["morada"] = htmlspecialchars($morada);
                $row_result["codigo_postal"] = htmlspecialchars($cp);
                $row_result["role"] = htmlspecialchars($role);
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
