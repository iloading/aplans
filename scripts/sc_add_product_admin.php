<?php
session_start();
require_once "../connections/connection.php";




if (isset($_POST['marca']) && isset($_POST['nome']) && isset($_POST['preco']) && isset($_POST['ano']) && isset($_POST['dsc_short']) && isset($_POST['dsc_long']) && isset($_POST['cor']) && isset($_POST['aroma']) && isset($_POST['sabor']) && isset($_POST['teor_alcool']) && isset($_POST['acidez']) && isset($_POST['acidez_vol']) && isset($_POST['pH']) && isset($_POST['extrato_seco']) && isset($_POST['conservacao']) && isset($_POST['servico']) && isset($_POST['desfrutar']) && isset($_POST['castas']) && isset($_POST['vinha'])) {
    
    if ($_POST['marca'] != '' && $_POST['nome'] != '' && $_POST['preco'] != '' && $_POST['ano'] != '' && $_POST['dsc_short'] != '' && $_POST['dsc_long'] != '' && $_POST['cor'] != '' && $_POST['aroma'] != '' && $_POST['sabor'] != '' && $_POST['teor_alcool'] != '' && $_POST['acidez'] != '' && $_POST['acidez_vol'] != '' && $_POST['pH'] != '' && $_POST['extrato_seco'] != '' && $_POST['conservacao'] != '' && $_POST['servico'] != '' && $_POST['desfrutar'] != '' && $_POST['castas'] != '' && $_POST['vinha'] != '') {

    //---------------------------GUARDAR TODOS OS INPUTS EM VARIÁVEIS ------------------------------------------------
        $marca = $_POST['marca'];
        $nome = $_POST['nome'] ;
        $preco = $_POST['preco'];
        $ano = $_POST['ano'];
        $dsc_short = $_POST['dsc_short'];
        $dsc_long = $_POST['dsc_long'];
        $cor = $_POST['cor'];
        $aroma = $_POST['aroma'];
        $sabor = $_POST['sabor'];
        $teor_alcool = $_POST['teor_alcool'];
        $acidez = $_POST['acidez'];
        $acidez_vol = $_POST['acidez_vol'];
        $pH = $_POST['pH'];
        $extrato_seco = $_POST['extrato_seco'];
        $conservacao = $_POST['conservacao'];
        $servico = $_POST['servico'];
        $desfrutar = $_POST['desfrutar'];
        $castas = $_POST['castas'];
        $vinha = $_POST['vinha'];


//--------------------------------IMAGEM UPLOAD------------------------------------------------
        $target_dir  = "../images/vinhos/270x340/";
        $target_dir2 = "../images/vinhos/75x94/";
        $target_dir3 = "../images/vinhos/80x100/";
        $target_dir4 = "../images/vinhos/450x565/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $target_file2 = $target_dir2 . basename($_FILES["fileToUpload"]["name"]);
        $target_file3 = $target_dir3 . basename($_FILES["fileToUpload"]["name"]);
        $target_file4 = $target_dir4 . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        
        

        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                $file_name = basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }

        //Se o ficheiro já existir
        if (file_exists($target_file)) {
            
            $uploadOk = 0;
            $erro = 11;
        }
        

        // Só caeita este tipo de formatos
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            
            $uploadOk = 0;
            $erro = 10;
        }
       



           
       
        //--------------------------------/IMAGEM UPLOAD--------------------------------

        //--------------------------------/ADICIONAR TUDO NA BD--------------------------------
        if ($uploadOk == 1) {


            $link = new_db_connection();

            $stmt = mysqli_stmt_init($link);

            $query = "INSERT INTO principal_produto_vinho (ref_marca_id ,nome, preco, ano, descricao_short, descricao_long, cor, aroma, sabor, teor_alcool, acidez_total, acidez_volatil, pH, extrato_seco, conservacao, servico, desfrutar, castas, vinha, imagem) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
    
            if (mysqli_stmt_prepare($stmt, $query)) {
                mysqli_stmt_bind_param($stmt, 'isdisssssiiiisssssss', $marca, $nome, $preco, $ano, $dsc_short, $dsc_long, $cor, $aroma, $sabor, $teor_alcool, $acidez, $acidez_vol, $pH, $extrato_seco, $conservacao, $servico, $desfrutar, $castas, $vinha, $file_name);
            


                if (mysqli_stmt_execute($stmt)) {
                    //SUCESSO
                    //Só adiciona os ficheiros ao servidor se o insert for válido
                    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                    //PRECISO DE COPIAR A IMAGEM DO PRODUTO PARA AS PASTAS DOS TAMANHOS TODOS PARA FUNCIONAREM EM TODAS AS PÁGINAS DO TEMPLATE
                    copy($target_file, $target_file2);
                    copy($target_file, $target_file3);
                    copy($target_file, $target_file4);

                    $_SESSION['msg'] =  true;
                    header("Location: ../my_acc.php?msg=8");
                }else {
                    //FALHOU EXECUTE
                    $_SESSION['msg'] =  true;
                    echo "error:" . mysqli_stmt_error($stmt);
                    header("Location: ../my_acc.php?msg=14");
                }
            }else {
                //FALHOU PREPARE
                $_SESSION['msg'] =  true;
                echo "error:" . mysqli_stmt_error($stmt);
                header("Location: ../my_acc.php?msg=2");
            }
        }else {
            //FICHEIRO NÃO FOI UPLOAD
            if ($erro == 11) {
                $_SESSION['msg'] =  true;
                echo "error:" . mysqli_stmt_error($stmt);
                header("Location: ../my_acc.php?msg=11");
            }elseif ($erro == 10) {
                $_SESSION['msg'] =  true;
                echo "error:" . mysqli_stmt_error($stmt);
                header("Location: ../my_acc.php?msg=10");
            }
            else {
                $_SESSION['msg'] =  true;
                echo "error:" . mysqli_stmt_error($stmt);
               header("Location: ../my_acc.php?msg=9");
            }
            
        }
    } else {
        //CAMPOS NAO PREENCHIDOS CORRETAMENTE
        $_SESSION['msg'] =  true;
        echo "error:" . mysqli_stmt_error($stmt);
        header("Location: ../my_acc.php?msg=7");
    }
}else {
    //CAMPOS NAO PREENCHIDOS CORRETAMENTE
    $_SESSION['msg'] =  true;
    echo "error:" . mysqli_stmt_error($stmt);
    header("Location: ../my_acc.php?msg=7");
}
?>