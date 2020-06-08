<?php

if (isset($_SESSION['id_user_iloading'])) {
    $id_user =$_SESSION['id_user_iloading'];
    //require_once "../connections/connection.php";
    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);

    $produtos_no_carrinho = array();
    $precoTotalCarrinho = 0;
    $numProdutos = 0;

    $query =
        "SELECT produtos_carrinho.id, ref_produto_id, quantidade, preco_total_produto , preco, principal_produto_vinho.nome, marca.nome, imagem
     FROM produtos_carrinho 
     INNER JOIN principal_produto_vinho ON produtos_carrinho.ref_produto_id = principal_produto_vinho.id /*preciso do nome do produto*/
     INNER JOIN marca ON ref_marca_id = idmarca /*preciso do nome da marca*/
     WHERE ref_user_id = ?";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 'i', $id_user);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);



            mysqli_stmt_bind_result($stmt, $id, $ref_produto_id, $quantidade, $preco_total_prduto, $precoIndividual, $nome_produto, $marca, $imagem);

            while (mysqli_stmt_fetch($stmt)) {
                $produtos_no_carrinho[] = array('id' => $ref_produto_id, 'nome' => $nome_produto, 'marca' => $marca, 'qty' => $quantidade, 'prcIndividual' => $precoIndividual, 'img' => $imagem, 'prc_total_produto' => $preco_total_prduto); //vou precisar de todos os valores para dar display de cada produto mais à frente
                $precoTotalCarrinho += $preco_total_prduto; //soma todos os preços dos produtos
                $numProdutos += $quantidade; //cada produto soma à variável para se saber quantos produtos existem no carrinho
            };


            mysqli_stmt_close($stmt);
            mysqli_close($link);
        } else {
            // Acção de erro
            echo "Error:" . mysqli_stmt_error($stmt);
        }
    } else {
        // Acção de erro
        echo "Error:" . mysqli_error($link);
        mysqli_close($link);
    } ?>
    <!-- Start Shopping Cart -->
    <div id="teste123" class="block-minicart minicart__active">
        <div class="minicart-content-wrapper ">
            <div class="micart__close">
                <span>close</span>
            </div>
            <div class=" items-total d-flex justify-content-between">
                <span class="h6">Tem <?= $numProdutos ?> items no carrinho.</span>
                <span>Cart Subtotal</span>
            </div>
            <div class=" total_amount text-right">
                <span><?= $precoTotalCarrinho ?>€</span>
            </div>
            <div class="mini_action checkout">
                <a class="checkout__btn" href="cart.php">Go to Checkout</a>
            </div>
            <div class="single__items">
                <div class="miniproduct" style="max-height: 50vh;overflow: initial;">
                    <?php
                    for ($i = 0; $i < count($produtos_no_carrinho); $i++) {
                        echo '<div class="item01 d-flex">
                        <div class="thumb">
                            <a href="single-product.php?idproduto=' . $produtos_no_carrinho[$i]['id'] . '"><img src="images/vinhos/75x94/' . $produtos_no_carrinho[$i]['img'] . '" alt="product images"></a>
                        </div>
                        <div class="content">
                            <h6><a href="single-product.php?idproduto=' . $produtos_no_carrinho[$i]['id'] . '">' . $produtos_no_carrinho[$i]['nome'] . '</a></h6>
                            <p id="marca123" class="text-warning p-0 m-0">' . $produtos_no_carrinho[$i]['marca'] . '</p>
                            <span class="prize">' . $produtos_no_carrinho[$i]['prcIndividual'] . '€</span>

                            <div class="product_prize d-flex justify-content-between">
                                <span class="qun">Qty: ' . $produtos_no_carrinho[$i]['qty'] . '</span>
                                <ul class="d-flex justify-content-end">
                                    <li><a href="scripts/sc_delete_from_cart.php?idproduto=' . $produtos_no_carrinho[$i]['id'] . '"><i class="zmdi zmdi-delete"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    ';
                    } ?>



                </div>
            </div>
            <div class=" mini_action cart">
                <a class="cart__btn" href="cart.php">View and edit cart</a>
            </div>
        </div>
    </div>
    <!-- End Shopping Cart -->
<?php
}
