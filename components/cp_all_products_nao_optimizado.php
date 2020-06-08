      <!-- Start All Products Area -->
      <section class="wn__bestseller__area bg--white pt--80  pb--30">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="section__title text-center">
                          <h2 class="title__be--2">All <span class="color--theme">Products</span></h2>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                              suffered lebmid alteration in some ledmid form</p>
                      </div>
                  </div>
              </div>
              <div class="row mt--50">
                  <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="product__nav nav justify-content-center" role="tablist">
                          <a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
                          <?php
                            $link = new_db_connection();

                            $stmt = mysqli_stmt_init($link);

                            $query = "SELECT idmarca, nome FROM marca";

                            if (mysqli_stmt_prepare($stmt, $query)) {

                                //mysqli_stmt_bind_param();

                                if (mysqli_stmt_execute($stmt)) {

                                    mysqli_stmt_bind_result($stmt, $idmarca, $nome);

                                    while (mysqli_stmt_fetch($stmt)) {
                                        echo '<a class="nav-item nav-link" data-toggle="tab" href="#nav-'. $idmarca.'" role="tab">'.$nome.'</a>';
                                    }
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
                            }

                            ?>

                          
                          <!-- <a class="nav-item nav-link" data-toggle="tab" href="#nav-adventure" role="tab">Fragosa</a>
                          <a class="nav-item nav-link" data-toggle="tab" href="#nav-children" role="tab">Fonte da Loba</a>
                          <a class="nav-item nav-link" data-toggle="tab" href="#nav-cook" role="tab">Incantum</a> -->
                      </div>
                  </div>
              </div>
              <div class="tab__container mt--60">
                  <!-- Start Single Tab Content -->
                  <div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
                      <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                          <?php
                            $link = new_db_connection();

                            $stmt = mysqli_stmt_init($link);

                            $query = "SELECT id, ref_marca_id, marca.nome,	principal_produto_vinho.nome,	imagem,	preco,	descricao_short,	descricao_long FROM principal_produto_vinho INNER JOIN marca ON ref_marca_id=idmarca ";

                            if (mysqli_stmt_prepare($stmt, $query)) {

                                //mysqli_stmt_bind_param();

                                if (mysqli_stmt_execute($stmt)) {

                                    mysqli_stmt_bind_result($stmt, $id, $ref_marca_id, $marca,   $nome,    $imagem,    $preco,    $descricao_short,    $descricao_long);

                                    while (mysqli_stmt_fetch($stmt)) {
                                        echo '<div class="single__product">
		                                <!-- Start Single Product -->
		                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
		                                <div class="product product__style--3">
		                                    <div class="product__thumb">
		                                        <a class="first__img" href="single-product.php?idproduto='.$id.'"><img width="270" height="340" src="images/vinhos/270x340/' . $imagem . '" alt="product image"></a>
		                                        <a class="second__img animation1" href="single-product.php?idproduto=' . $id . '"><img src="images/books/2.jpg" alt="product image"></a>
		                                        
		                                    </div>
		                                <div class="product__content content--center content--center">
											<h4><a href="single-product.html">' . $nome . '</a></h4>
											<h4><a class="text-warning font-weight-light" href="single-product.html">' . $marca . '</a></h4>
		                                    <ul class="prize d-flex text-center">
		                                        <li class="text-center m-0">' . $preco . '€</li>
		                                    </ul>
		                                    <div class="action">
		                                        <div class="actions_inner">
		                                            <ul class="add_to_links">
		                                                <li><a class="cart" href=""><i class="bi bi-shopping-bag4"></i></a></li>
		                                                <li><a class="wishlist" href=""><i class="bi bi-shopping-cart-full"></i></a></li>
		                                                <li><a class="compare" href=""><i class="bi bi-heart-beat"></i></a></li>
		                                                <li><a data-toggle="" title="Quick View" class="quickview modal-view detail-link" href=""><i class="bi bi-search"></i></a></li>
		                                            </ul>
		                                        </div>
		                                    </div>
		                                    <div class="product__hover--content">
		                                        <ul class="rating d-flex">
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li><i class="fa fa-star-o"></i></li>
		                                            <li><i class="fa fa-star-o"></i></li>
		                                        </ul>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <!-- Start Single Product -->

		                    </div>';
                                    }
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
                            }

                            ?>


                      </div>
                  </div>
                  <!-- End Single Tab Content -->
                  <!-- Start Single Tab Content -->
                  <div class="row single__tab tab-pane fade" id="nav-1" role="tabpanel">
                      <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                          <?php
                            $link = new_db_connection();

                            $stmt = mysqli_stmt_init($link);

                            $query = "SELECT id, ref_marca_id, marca.nome,	principal_produto_vinho.nome,	imagem,	preco,	descricao_short,	descricao_long FROM principal_produto_vinho INNER JOIN marca ON ref_marca_id=idmarca WHERE ref_marca_id = 1 ";

                            if (mysqli_stmt_prepare($stmt, $query)) {

                                //mysqli_stmt_bind_param();

                                if (mysqli_stmt_execute($stmt)) {

                                    mysqli_stmt_bind_result($stmt, $id, $ref_marca_id, $marca,    $nome,    $imagem,    $preco,    $descricao_short,    $descricao_long);

                                    while (mysqli_stmt_fetch($stmt)) {
                                        echo '<div class="single__product">
		                                <!-- Start Single Product -->
		                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
		                                <div class="product product__style--3">
		                                    <div class="product__thumb">
		                                        <a class="first__img"  href="single-product.php?idproduto=' . $id . '"><img width="270" height="340" src="images/vinhos/270x340//' . $imagem . '" alt="product image"></a>
		                                        <a class="second__img animation1"  href="single-product.php?idproduto=' . $id . '"><img src="images/books/2.jpg" alt="product image"></a>
		                                        
		                                    </div>
		                                <div class="product__content content--center content--center">
											<h4><a href="single-product.html">' . $nome . '</a></h4>
											<h4><a href="single-product.html">' . $marca . '</a></h4>
		                                    <ul class="prize d-flex text-center">
		                                        <li class="text-center m-0">' . $preco . '€</li>
		                                    </ul>
		                                    <div class="action">
		                                        <div class="actions_inner">
		                                            <ul class="add_to_links">
		                                                <li><a class="cart" href=""><i class="bi bi-shopping-bag4"></i></a></li>
		                                                <li><a class="wishlist" href=""><i class="bi bi-shopping-cart-full"></i></a></li>
		                                                <li><a class="compare" href=""><i class="bi bi-heart-beat"></i></a></li>
		                                                <li><a data-toggle="" title="Quick View" class="quickview modal-view detail-link" href=""><i class="bi bi-search"></i></a></li>
		                                            </ul>
		                                        </div>
		                                    </div>
		                                    <div class="product__hover--content">
		                                        <ul class="rating d-flex">
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li><i class="fa fa-star-o"></i></li>
		                                            <li><i class="fa fa-star-o"></i></li>
		                                        </ul>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <!-- Start Single Product -->

		                    </div>';
                                    }
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
                            }

                            ?>


                      </div>
                  </div>
                  <!-- End Single Tab Content -->
                  <!-- Start Single Tab Content -->
                  <div class="row single__tab tab-pane fade" id="nav-2" role="tabpanel">
                      <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                          <?php
                            $link = new_db_connection();

                            $stmt = mysqli_stmt_init($link);

                            $query = "SELECT id, ref_marca_id, marca.nome,	principal_produto_vinho.nome,	imagem,	preco,	descricao_short,	descricao_long FROM principal_produto_vinho INNER JOIN marca ON ref_marca_id=idmarca WHERE ref_marca_id = 2 ";

                            if (mysqli_stmt_prepare($stmt, $query)) {

                                //mysqli_stmt_bind_param();

                                if (mysqli_stmt_execute($stmt)) {

                                    mysqli_stmt_bind_result($stmt, $id, $ref_marca_id, $marca,    $nome,    $imagem,    $preco,    $descricao_short,    $descricao_long);

                                    while (mysqli_stmt_fetch($stmt)) {
                                        echo '<div class="single__product">
		                                <!-- Start Single Product -->
		                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
		                                <div class="product product__style--3">
		                                    <div class="product__thumb">
		                                        <a class="first__img"  href="single-product.php?idproduto=' . $id . '"><img width="270" height="340" src="images/vinhos/270x340//' . $imagem . '" alt="product image"></a>
		                                        <a class="second__img animation1"  href="single-product.php?idproduto=' . $id . '"><img src="images/books/2.jpg" alt="product image"></a>
		                                        
		                                    </div>
		                                <div class="product__content content--center content--center">
											<h4><a href="single-product.html">' . $nome . '</a></h4>
											<h4><a href="single-product.html">' . $marca . '</a></h4>
		                                    <ul class="prize d-flex text-center">
		                                        <li class="text-center m-0">' . $preco . '€</li>
		                                    </ul>
		                                    <div class="action">
		                                        <div class="actions_inner">
		                                            <ul class="add_to_links">
		                                                <li><a class="cart" href=""><i class="bi bi-shopping-bag4"></i></a></li>
		                                                <li><a class="wishlist" href=""><i class="bi bi-shopping-cart-full"></i></a></li>
		                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
		                                                <li><a data-toggle="" title="Quick View" class="quickview modal-view detail-link" href=""><i class="bi bi-search"></i></a></li>
		                                            </ul>
		                                        </div>
		                                    </div>
		                                    <div class="product__hover--content">
		                                        <ul class="rating d-flex">
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li><i class="fa fa-star-o"></i></li>
		                                            <li><i class="fa fa-star-o"></i></li>
		                                        </ul>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <!-- Start Single Product -->

		                    </div>';
                                    }
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
                            }

                            ?>


                      </div>
                  </div>
                  <!-- End Single Tab Content -->
                  <!-- Start Single Tab Content -->
                  <div class="row single__tab tab-pane fade" id="nav-3" role="tabpanel">
                      <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                          <?php
                            $link = new_db_connection();

                            $stmt = mysqli_stmt_init($link);

                            $query = "SELECT id, ref_marca_id, marca.nome,	principal_produto_vinho.nome,	imagem,	preco,	descricao_short,	descricao_long FROM principal_produto_vinho INNER JOIN marca ON ref_marca_id=idmarca WHERE ref_marca_id = 3 ";

                            if (mysqli_stmt_prepare($stmt, $query)) {

                                //mysqli_stmt_bind_param();

                                if (mysqli_stmt_execute($stmt)) {

                                    mysqli_stmt_bind_result($stmt, $id, $ref_marca_id, $marca,   $nome,    $imagem,    $preco,    $descricao_short,    $descricao_long);

                                    while (mysqli_stmt_fetch($stmt)) {
                                        echo '<div class="single__product">
		                                <!-- Start Single Product -->
		                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
		                                <div class="product product__style--3">
		                                    <div class="product__thumb">
		                                        <a class="first__img"  href="single-product.php?idproduto=' . $id . '"><img width="270" height="340" src="images/vinhos/270x340//' . $imagem . '" alt="product image"></a>
		                                        <a class="second__img animation1"  href="single-product.php?idproduto=' . $id . '"><img src="images/books/2.jpg" alt="product image"></a>
		                                        
		                                    </div>
		                                <div class="product__content content--center content--center">
											<h4><a href="single-product.html">' . $nome . '</a></h4>
											<h4><a href="single-product.html">' . $marca . '</a></h4>
		                                    <ul class="prize d-flex text-center">
		                                        <li class="text-center m-0">' . $preco . '€</li>
		                                    </ul>
		                                    <div class="action">
		                                        <div class="actions_inner">
		                                            <ul class="add_to_links">
		                                                <li><a class="cart" href=""><i class="bi bi-shopping-bag4"></i></a></li>
		                                                <li><a class="wishlist" href=""><i class="bi bi-shopping-cart-full"></i></a></li>
		                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
		                                                <li><a data-toggle="" title="Quick View" class="quickview modal-view detail-link" href=""><i class="bi bi-search"></i></a></li>
		                                            </ul>
		                                        </div>
		                                    </div>
		                                    <div class="product__hover--content">
		                                        <ul class="rating d-flex">
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li><i class="fa fa-star-o"></i></li>
		                                            <li><i class="fa fa-star-o"></i></li>
		                                        </ul>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <!-- Start Single Product -->

		                    </div>';
                                    }
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
                            }

                            ?>


                      </div>
                  </div>
                  <!-- End Single Tab Content -->
                  <!-- Start Single Tab Content -->
                  <div class="row single__tab tab-pane fade" id="nav-4" role="tabpanel">
                      <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                          <?php
                            $link = new_db_connection();

                            $stmt = mysqli_stmt_init($link);

                            $query = "SELECT id, ref_marca_id, marca.nome,	principal_produto_vinho.nome,	imagem,	preco,	descricao_short,	descricao_long FROM principal_produto_vinho INNER JOIN marca ON ref_marca_id=idmarca WHERE ref_marca_id = 4 ";

                            if (mysqli_stmt_prepare($stmt, $query)) {

                                //mysqli_stmt_bind_param();

                                if (mysqli_stmt_execute($stmt)) {

                                    mysqli_stmt_bind_result($stmt, $id, $ref_marca_id, $marca,    $nome,    $imagem,    $preco,    $descricao_short,    $descricao_long);

                                    while (mysqli_stmt_fetch($stmt)) {
                                        echo '<div class="single__product">
		                                <!-- Start Single Product -->
		                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
		                                <div class="product product__style--3">
		                                    <div class="product__thumb">
		                                        <a class="first__img"  href="single-product.php?idproduto=' . $id . '"><img width="270" height="340" src="images/vinhos/270x340/' . $imagem . '" alt="product image"></a>
		                                        <a class="second__img animation1"  href="single-product.php?idproduto=' . $id . '"><img src="images/books/2.jpg" alt="product image"></a>
		                                        
		                                    </div>
		                                <div class="product__content content--center content--center">
											<h4><a href="single-product.html">' . $nome . '</a></h4>
											<h4><a href="single-product.html">' . $marca . '</a></h4>
		                                    <ul class="prize d-flex text-center">
		                                        <li class="text-center m-0">' . $preco . '€</li>
		                                    </ul>
		                                    <div class="action">
		                                        <div class="actions_inner">
		                                            <ul class="add_to_links">
		                                                <li><a class="cart" href=""><i class="bi bi-shopping-bag4"></i></a></li>
		                                                <li><a class="wishlist" href=""><i class="bi bi-shopping-cart-full"></i></a></li>
		                                                <li><a class="compare" href=""><i class="bi bi-heart-beat"></i></a></li>
		                                                <li><a data-toggle="" title="Quick View" class="quickview modal-view detail-link" href=""><i class="bi bi-search"></i></a></li>
		                                            </ul>
		                                        </div>
		                                    </div>
		                                    <div class="product__hover--content">
		                                        <ul class="rating d-flex">
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li class="on"><i class="fa fa-star-o"></i></li>
		                                            <li><i class="fa fa-star-o"></i></li>
		                                            <li><i class="fa fa-star-o"></i></li>
		                                        </ul>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <!-- Start Single Product -->

		                    </div>';
                                    }
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
                            }

                            ?>


                      </div>
                  </div>
                  <!-- End Single Tab Content -->
              </div>
          </div>
      </section>
      <!-- Start BEst Seller Area -->