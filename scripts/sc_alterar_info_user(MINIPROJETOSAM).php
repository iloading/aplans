<?php
require_once "../connections/connection.php";
require_once "sc_verificar_pass.php";
session_start();

if (verf_pass()) {
    if (isset($_POST['nomeNovo']) && $_POST['nomeNovo'] != '') {
        
        $novo_nome = $_POST['nomeNovo'];
        $novo_apelido = $_POST['apelidoNovo'];
        $novo_telemovel = $_POST['telemovelNovo'];
        $novo_morada = $_POST['moradaNovo'];
        $novo_localidade = $_POST['localidadeNovo'];
        $novo_nif = $_POST['nifNovo'];
        $id =$_SESSION['id_user_iloading'];

        $link = new_db_connection();
        $stmt = mysqli_stmt_init($link);

        $query = "SELECT id, ref_roles_codigo, email, password, nome, apelido, data_nascimento, telemovel, morada, codigo_postal, localidade, nif FROM user WHERE id = ?";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'i', $id);

            if (mysqli_stmt_execute($stmt)) {

                mysqli_stmt_bind_result($stmt, $id, $ref_roles_codigo, $email, $password_hash, $nome_antigo, $apelido, $data_nascimento, $telemovel, $morada, $codigo_postal, $localidade, $nif);

                mysqli_stmt_fetch($stmt);


                if ($novo_nome == $nome_antigo && $novo_apelido == $apelido && $novo_telemovel == $telemovel && $novo_morada == $morada && $novo_localidade == $localidade && $novo_nif == $nif) {
                    $_SESSION['msg'] = true; //variável para mostrar o aviso, uso sessão para quando se atulizar novamente a página o aviso desaparecer
                    header("Location: ../my_acc.php?msg=0");
                } else {
                    mysqli_stmt_close($stmt);
                    $stmt2 = mysqli_stmt_init($link);
                    $query = "  UPDATE user
                        SET nome = ? , apelido = ? ,telemovel = ?,morada = ?,localidade = ?,nif = ?
                        WHERE id = ? ";

                    if (mysqli_stmt_prepare($stmt2, $query)) {
                        mysqli_stmt_bind_param($stmt2, 'ssissii', $novo_nome, $novo_apelido , $novo_telemovel, $novo_morada, $novo_localidade, $novo_nif, $id);


                        mysqli_stmt_execute($stmt2) ;
                            //mysqli_stmt_fetch($stmt2);
                        
                    }
                    $_SESSION['msg'] = true; //variável para mostrar o aviso, uso sessão para quando se atulizar novamente a página o aviso desaparecer
                    header("Location: ../my_acc.php?msg=1");
                }


                mysqli_stmt_close($stmt2);
                mysqli_close($link);
            } else {
                mysqli_stmt_close($stmt2);
                $_SESSION['msg'] = true; //variável para mostrar o aviso, uso sessão para quando se atulizar novamente a página o aviso desaparecer
                header("Location: ../my_acc.php?msg=3");
            }
        } else {
            // Acção de erro
            mysqli_stmt_close($stmt2);
            $_SESSION['msg'] =  true;
            header("Location: ../my_acc.php?msg=2");
            //echo "Error:" . mysqli_error($link);
            
        }
    }else {
        $_SESSION['msg'] =  true;
        header("Location: ../my_acc.php?msg=5");
    }
    
} else {
    $_SESSION['msg'] =  true;
    header("Location: ../my_acc.php?msg=6");
}

?>
