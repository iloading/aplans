<?php
session_start();
require_once "../connections/connection.php";


if (isset($_POST['qty']) && isset($_GET['idProduto'])) {
    if (isset($_SESSION['id_user_iloading'])) {
        $id_user_logado =$_SESSION['id_user_iloading'];
        $idProduto = $_GET['idProduto'];
        $quantidade = $_POST['qty'];


        //PARTE 1 VERIFICA SE O PRODUTO EXISTE NA BD
        $link = new_db_connection();

        $stmt = mysqli_stmt_init($link);

        $query = "SELECT id, preco FROM principal_produto_vinho WHERE id = ?";

        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'i', $idProduto);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $id, $preco);


                if (mysqli_stmt_fetch($stmt)) {
                    $scaleVal = 2; 
                    $preco_total = bcmul($preco,$quantidade, $scaleVal) ;
                    $produtoExiste = true;
                } else {
                    $produtoExiste = false;
                    $_SESSION['msg'] = true;
                    //ADCIONAR pág 404
                    // header('Location: ../single-product.php?idproduto=23' . '&msg=1');
                };


                mysqli_stmt_close($stmt);
            } else {
                // Acção de erro - algo de errado não está certo
                echo "Error:" . mysqli_stmt_error($stmt);
            }
        } else {
            // Acção de erro - ID produto não existe na BD
            echo "Error:" . mysqli_error($link);
            mysqli_close($link);
        }



        //PARTE 2 VERIFICAR SE O PRODUTO QUE ESTAMOS A ADICIONAR JÁ EXISTE NO CARRINHO
        if ($produtoExiste) { //se o produto que queremos adicionar existe na BD
            $stmt = mysqli_stmt_init($link);

            $query = "SELECT ref_produto_id, quantidade, preco 
            FROM produtos_carrinho 
            INNER JOIN principal_produto_vinho 
            ON produtos_carrinho.ref_produto_id = principal_produto_vinho.id
            WHERE ref_produto_id = ?
            AND ref_user_id = ?";

            if (mysqli_stmt_prepare($stmt, $query)) {
                mysqli_stmt_bind_param($stmt, 'ii', $idProduto, $id_user_logado);

                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_bind_result($stmt, $produto_jaNo_carrinho, $quantidadeAntiga, $precoProduto);
                    mysqli_stmt_store_result($stmt);

                    mysqli_stmt_fetch($stmt);
                    


                    if (mysqli_stmt_num_rows($stmt) == 1) {
                        mysqli_stmt_close($stmt);
                        
                        $stmt = mysqli_stmt_init($link);

                        $query = "  UPDATE produtos_carrinho
                                SET quantidade = ?, preco_total_produto=?
                                WHERE ref_produto_id = ? AND ref_user_id = ?";


                        if (mysqli_stmt_prepare($stmt, $query)) {
                            
                            $quantidade_nova = $quantidadeAntiga + $quantidade;
                            $scaleVal = 2; 
                            $precoNovo = bcmul($quantidade_nova, $precoProduto, $scaleVal);
                            mysqli_stmt_bind_param($stmt, 'idii', $quantidade_nova, $precoNovo, $produto_jaNo_carrinho, $id_user_logado);

                            if (mysqli_stmt_execute($stmt)) {
                                //QUANTIDADE UPDATED COM SUCESSO
                                $alreadyAdded = true;
                                mysqli_stmt_close($stmt);
                                mysqli_close($link);
                                $_SESSION['msg'] = true;
                                header('Location: ../single-product.php?idproduto=' . $idProduto . '&msg=0');
                            } else {
                                $alreadyAdded = false;
                                mysqli_stmt_close($stmt);
                                mysqli_close($link);
                                $_SESSION['msg'] = true;
                                header('Location: ../single-product.php?idproduto=' . $idProduto . '&msg=1');
                            };
                        } else {
                            $_SESSION['msg'] = true;
                            header('Location: ../single-product.php?idproduto=' . $idProduto . '&msg=1');
                        }
                    } else {
                        mysqli_stmt_close($stmt);
                        mysqli_close($link);
                    }
                } else {
                    // Acção de erro - algo de errado não está certo
                    echo "Error:" . mysqli_stmt_error($stmt);
                }
            } else {
                // Acção de erro - ID produto não existe na BD
                echo "Error:" . mysqli_error($link);
                mysqli_close($link);
            }
        }



        //PARTE 3 VAMOS ADICIONAR O PRODUTO AO CARRINHO
        if ($alreadyAdded == false) { //se o produto já estava no carrinho, bastou dar update à quantidade, não se insere outra vez

            if ($produtoExiste) { //se o produto existe na bd
                $link = new_db_connection();

                $stmt = mysqli_stmt_init($link);

                $query = "INSERT INTO produtos_carrinho (ref_user_id, ref_produto_id, quantidade, preco_total_produto ) VALUES (?,?,?,?)";

                if (mysqli_stmt_prepare($stmt, $query)) {
                    mysqli_stmt_bind_param($stmt, 'iiid', $id_user_logado, $idProduto, $quantidade, $preco_total);

                    if (mysqli_stmt_execute($stmt)) {
                        mysqli_stmt_fetch($stmt);


                        mysqli_stmt_close($stmt);
                        mysqli_close($link);
                        $_SESSION['msg'] = true;
                        header('Location: ../single-product.php?idproduto=' . $idProduto . '&msg=0');
                    } else {
                        // Acção de erro - algo de errado não está certo
                        echo "Error:" . mysqli_stmt_error($stmt);
                    }
                } else {
                    // Acção de erro - ID produto não existe na BD
                    echo "Error:" . mysqli_error($link);
                    mysqli_close($link);
                }
            } else {
                $_SESSION['msg'] = true;
                header('Location: ../single-product.php?idproduto=' . $idProduto . '&msg=1');
            }
        }
    } else {
        $_SESSION['msg'] =  true;
        header("Location: ../login.php?msg=1");
    }
}
