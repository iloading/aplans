<?php 
require_once "../connections/connection.php";

session_start();
$id_user = $_SESSION['id_user_aplans'];
$data = array();

$link = new_db_connection();

if (isset($_GET['nome'])) {
    $search = $_GET['nome'];
    $pagina = $_GET['pag'];
    $items = 4;
    $pos_pesquisa = ($pagina-1) * $items;

    $wildcard = "%$search%";

    $stmt = mysqli_stmt_init($link);


   
        $query = "SELECT event.id, event.name, url FROM event INNER JOIN event_type ON ref_event_type_id= event_type.id WHERE event.name LIKE ? ORDER BY date LIMIT ?, ?";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'sii', $wildcard, $pos_pesquisa, $items);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $id, $nome, $url);


                while (mysqli_stmt_fetch($stmt)) {
                    $row_result = array();
                    $row_result["nome"] = htmlspecialchars($nome);
                    $row_result["id"] = htmlspecialchars($id);
                    $row_result["url"] = htmlspecialchars($url);
                    
                    $data['modal_eventos'][] = $row_result;
                }
                mysqli_stmt_close($stmt);
            }
        }
    
}
print json_encode($data);
