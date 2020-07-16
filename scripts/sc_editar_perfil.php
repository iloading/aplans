<?php
require_once "../connections/connection.php";

session_start();
$data = array();

if (isset($_SESSION['id_user_aplans'])) {

    $sucesso = 1;
    $row_results_erro = array();
    $criador = $_SESSION['id_user_aplans'];



    if(isset($_GET['nomePerfil']) && isset($_GET['emailPerfil'])){


        if ($_GET["nomePerfil"] != "" && $_GET["emailPerfil"] != "") {

            $nome = $_GET['nomePerfil'];
            $email = $_GET['emailPerfil'];

            if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
                $sucesso = 0;
                $row[] = '7';
            };

        } else {
            $sucesso = 0;
            //echo ('erro falta dados');
            $row[] = '8';
    
            
        }



       
            $morada = $_GET['moradaPerfil'];

        
        
            $codigo_postal = $_GET['codigo_postal_perfil'];

            if ($codigo_postal != "") {
                $pattern = "/^\d{4}-\d{3}?$/";


                if (preg_match($pattern, $codigo_postal));
                else {
                    $sucesso = 0;
                    //echo('postal not good');
                    $row[] = '10';
                }
            }
       


      
            $telemovel = $_GET['telemovelPerfil'];

            if ($telemovel != "") {
                $pattern = "/(9[1236][0-9]) ?([0-9]{3}) ?([0-9]{3})/";

                if (preg_match($pattern, $telemovel)) {
                } else {
                    $sucesso = 0;
                    //echo('tele not good');
                    $row[] = '9';
                }
            } else {
                $telemovel = NULL;
            }


       

       
            $genero = $_GET['generoPerfil'];
      



        if($_GET["urlPerfil"] !=''){
            $url = $_GET['urlPerfil'];
        }else{
            $row[] = '';
        }

     
            $descricao = $_GET['descricaoPerfil'];
       
      
    }


 


    if ($sucesso == 1) {

        $link = new_db_connection();

    

        $stmt = mysqli_stmt_init($link);

        $query = "UPDATE users SET nome = ?, email = ?, morada = ?, codigo_postal = ?, telemovel = ?, url = ?, descricao = ?, ref_genero_id = ? WHERE users.id = ?";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'ssssissii', $nome,$email,$morada,$codigo_postal,$telemovel,$url,$descricao,$genero,$criador);
            if (mysqli_stmt_execute($stmt)) {
                $data['updatePerfil'] = 'sucesso';
            }
        }


       
    }else{

        $data['erro'] = $row;
       


    }

    print json_encode($data);
}




