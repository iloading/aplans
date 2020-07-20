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
    $pos_pesquisa = ($pagina - 1) * $items;

    $wildcard = "%$search%";


    $stmt = mysqli_stmt_init($link);

    $query = "SELECT user_id1, user_id2 FROM amigos WHERE user_id1 = ? OR user_id2 = ?";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 'ii',$id_user,$id_user);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt,$user1, $user2);

            $amigos = array();

            while (mysqli_stmt_fetch($stmt)) {

                if($user1 != $id_user){

                    $amigos[]=$user1;

                }


                if ($user2 != $id_user) {

                    $amigos[] = $user2;
                }



            }



          
        }
    }




















    $stmt = mysqli_stmt_init($link);

    if ($search != "") {
        $query = "SELECT id, nome, url FROM users WHERE nome LIKE ? ORDER BY nome LIMIT ?,?";

        if (mysqli_stmt_prepare($stmt, $query)) { 
            mysqli_stmt_bind_param($stmt, 'sii',$wildcard, $pos_pesquisa, $items);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $id, $nome, $url);


                while (mysqli_stmt_fetch($stmt)) {

                    if(!in_array($id,$amigos)){

                        $row_result = array();
                        $row_result["nome"] = htmlspecialchars($nome);
                        $row_result["id"] = htmlspecialchars($id);
                        $row_result["url"] = htmlspecialchars($url);

                        $data['utilizadores'][] = $row_result;

                    }

                   

                }
            }
        }

        print json_encode($data);
    }else {
        $data['utilizadores'] = 'vazio';
    }

    

}

?>


