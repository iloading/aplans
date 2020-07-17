<?php 
    require_once "../connections/connection.php";

    session_start();
    $id_user = $_SESSION['id_user_aplans'];
    $data = array();


    $link = new_db_connection();

    /*----------------- Ir buscar os tipos de Eventos à BD ----------------*/

    $stmt = mysqli_stmt_init($link);

    $query = "SELECT id, type, url FROM event_type";

    if (mysqli_stmt_prepare($stmt, $query)) { 
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt, $id, $type, $url);


            while (mysqli_stmt_fetch($stmt)) {

                $row_result = array();
                $row_result["nome"] = htmlspecialchars($type);
                $row_result["id"] = htmlspecialchars($id);
                $row_result["url"] = htmlspecialchars($url);
                
                $data['tipoEvento'][] = $row_result;

            }
        }
    }




$link = new_db_connection();

/*----------------- Ir buscar os dados do utilizador logado ----------------*/

$stmt = mysqli_stmt_init($link);

$query = "SELECT users.id, users.nome, users.email, users.telemovel, users.morada, users.codigo_postal, users.url, users.descricao, genero.sexo FROM users INNER JOIN genero ON users.ref_genero_id = genero.id WHERE users.id = ?";

if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id_user);
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $id, $nome, $email, $telemovel, $morada, $codigo_postal, $url, $descricao, $genero);


        while (mysqli_stmt_fetch($stmt)) {

           

            $row_result = array();
            $row_result["id"] = htmlspecialchars($id);
            $row_result["nome"] = htmlspecialchars($nome);
            $row_result["email"] = htmlspecialchars($email);
            $row_result["telemovel"] = htmlspecialchars($telemovel);
            $row_result["morada"] = htmlspecialchars($morada);
            $row_result["codigo_postal"] = htmlspecialchars($codigo_postal);
            $row_result["url"] = htmlspecialchars($url);
            $row_result["descricao"] = htmlspecialchars($descricao);
            $row_result["genero"] = htmlspecialchars($genero);
            

            $data['perfil'][] = $row_result;



           
        }
    }
}



$link = new_db_connection();

/*----------------- Ir buscar os generos ----------------*/

$stmt = mysqli_stmt_init($link);

$query = "SELECT id, sexo FROM genero";

if (mysqli_stmt_prepare($stmt, $query)) {
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $id, $sexo);


        while (mysqli_stmt_fetch($stmt)) {

            $row_result = array();
            
            $row_result["id"] = htmlspecialchars($id);
            $row_result["sexo"] = htmlspecialchars($sexo);

            $data['genero'][] = $row_result;
        }
    }
}





    print json_encode($data);
