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


    if ($search != "vazio") {
        $query = "SELECT users.id, users.nome, users.url FROM users INNER JOIN amigos ON users.id = user_id1  WHERE user_id2 = ? AND users.nome LIKE ?";

        if (mysqli_stmt_prepare($stmt, $query)) { 
            mysqli_stmt_bind_param($stmt, 'is', $id_user ,$wildcard);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $id, $nome, $url);


                while (mysqli_stmt_fetch($stmt)) {
    
                    $row_result = array();
                    $row_result["nome"] = htmlspecialchars($nome);
                    $row_result["id"] = htmlspecialchars($id);
                    $row_result["url"] = htmlspecialchars($url);
                    
                    $data['utilizadores'][] = $row_result;

                }
                mysqli_stmt_close($stmt);
            }
           
        }

       
    


    $stmt = mysqli_stmt_init($link);

   
        $query = "SELECT users.id, users.nome, users.url FROM users INNER JOIN amigos ON users.id = user_id2  WHERE user_id1 = ? AND users.nome LIKE ?";


        if (mysqli_stmt_prepare($stmt, $query)) { 
            mysqli_stmt_bind_param($stmt, 'is', $id_user ,$wildcard);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $id, $nome, $url);


                while (mysqli_stmt_fetch($stmt)) {

                    $row_result = array();
                    $row_result["nome"] = htmlspecialchars($nome);
                    $row_result["id"] = htmlspecialchars($id);
                    $row_result["url"] = htmlspecialchars($url);
                    
                    $data['utilizadores'][] = $row_result;

                }
                mysqli_stmt_close($stmt);
            }
        }

    }else {
        $query = "SELECT users.id, users.nome, users.url FROM users INNER JOIN amigos ON users.id = user_id1  WHERE user_id2 = ?";

        if (mysqli_stmt_prepare($stmt, $query)) { 
            mysqli_stmt_bind_param($stmt, 'i', $id_user);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $id, $nome, $url);


                while (mysqli_stmt_fetch($stmt)) {
    
                    $row_result = array();
                    $row_result["nome"] = htmlspecialchars($nome);
                    $row_result["id"] = htmlspecialchars($id);
                    $row_result["url"] = htmlspecialchars($url);
                    
                    $data['utilizadores'][] = $row_result;

                }
                mysqli_stmt_close($stmt);
            }
           
        }

       
    


    $stmt = mysqli_stmt_init($link);

   
        $query = "SELECT users.id, users.nome, users.url FROM users INNER JOIN amigos ON users.id = user_id2  WHERE user_id1 = ?";


        if (mysqli_stmt_prepare($stmt, $query)) { 
            mysqli_stmt_bind_param($stmt, 'i', $id_user);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $id, $nome, $url);


                while (mysqli_stmt_fetch($stmt)) {

                    $row_result = array();
                    $row_result["nome"] = htmlspecialchars($nome);
                    $row_result["id"] = htmlspecialchars($id);
                    $row_result["url"] = htmlspecialchars($url);
                    
                    $data['utilizadores'][] = $row_result;

                }
                mysqli_stmt_close($stmt);
            }
        }
    }


    print json_encode($data);

}

?>


