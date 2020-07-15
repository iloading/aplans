<?php
require_once "../connections/connection.php";

session_start();
$data = array();

if (isset($_SESSION['id_user_aplans'])) {

    $sucesso = 1;
    $row_results_erro = array();
    $criador = $_SESSION['id_user_aplans'];



    if(isset($_GET['nomePerfil']) && isset($_GET['emailPerfil'])){


        if ($_GET["nomePerfil"] && $_GET["emailPerfil"] != "") {

            $nome = $_GET['nomePerfil'];
            $email = $_GET['emailPerfil'];

            //VERIFICAR EMAIL




        }

        if ($_GET["moradaPerfil"] && $_GET["codigo_postal_Perfil"] && $_GET["telemovelPerfil"] && $_GET["generoPerfil"] && $_GET["urlPerfil"] && $_GET["descricaoPerfil"]) {

            $morada = $_GET['moradaPerfil'];
            $telemovel = $_GET['telemovelPerfil'];
            $genero = $_GET['generoPerfil'];
            $url = $_GET['urlPerfil'];
            $descricao = $_GET['descricaoPerfil'];
            $codigo_postal = $_GET['codigo_postal_perfil'];



            //VERIFICAR TELEMOVEL
            //VERIFICAR POSTAL


        }



    }

   
  



    $link = new_db_connection();

  

    $stmt = mysqli_stmt_init($link);

    $query = "UPDATE users SET nome = ?, email = ?, morada = ?, codigo_postal = ?, telemovel = ?, url = ?, descricao = ?, ref_genero_id = ? WHERE users.id = ?";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 'sssiissii', $nome,$email,$morada,$codigo_postal,$telemovel,$url,$descricao,$genero,$criador);
        if (mysqli_stmt_execute($stmt)) {
            $data['updatePerfil'] = 'sucesso';
        }
    }


    print json_encode($data);

   
}
