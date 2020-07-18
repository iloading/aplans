<?php 
require_once "../connections/connection.php";

session_start();
$id_user = $_SESSION['id_user_aplans'];
$data = array();

$link = new_db_connection();

if (isset($_GET['nome'])) {

    $search = $_GET['nome'];
    

    $wildcard = "%$search%";

    $stmt = mysqli_stmt_init($link);

    if ($search != "") {
        $query = "SELECT id, nome, url FROM users WHERE nome LIKE ?";

        if (mysqli_stmt_prepare($stmt, $query)) { 
            mysqli_stmt_bind_param($stmt, 's',  $wildcard);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $id, $nome, $url);


                while (mysqli_stmt_fetch($stmt)) {

                    $row_result = array();
                    $row_result["nome"] = htmlspecialchars($nome);
                    $row_result["id"] = htmlspecialchars($id);
                    $row_result["url"] = htmlspecialchars($url);
                    
                    $data['utilizadores'][] = $row_result;

                }
            }
        }

        print json_encode($data);
    }else {
        $data['utilizadores'] = 'vazio';
    }

    

}

?>


