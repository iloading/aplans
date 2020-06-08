<?php session_start();
require_once "connections/connection.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<?php include_once "helpers/help_meta.php" ?>
	<title>Produto | Carregosa Vinhos</title>
	<?php include_once "helpers/help_css.php" ?>


</head>


<body>


	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">

		<!-- Header -->
		<?php include_once "components/cp_header.php" ?>

		<?php
		if (isset($_GET['idproduto']) && $_GET['idproduto'] != '') {
			$idProduto = $_GET['idproduto'];

			$link = new_db_connection();

			$stmt = mysqli_stmt_init($link);

			$query =
				"SELECT
				principal_produto_vinho.nome,
				marca.nome AS marca,
				ano,
				imagem,
				preco,
				descricao_short,
				descricao_long,
				cor,
				aroma,
				sabor,
				teor_alcool,
				acidez_total,
				acidez_volatil,
				ph,
				extrato_seco,
				conservacao,
				servico,
				desfrutar,
				castas,
				vinha
				FROM principal_produto_vinho
				INNER JOIN marca ON principal_produto_vinho.ref_marca_id = marca.idmarca
				WHERE
				id = ?";

			if (mysqli_stmt_prepare($stmt, $query)) {

				mysqli_stmt_bind_param($stmt, 'i', $idProduto);

				if (mysqli_stmt_execute($stmt)) {

					mysqli_stmt_bind_result(
						$stmt,
						$nome,
						$marca,
						$ano,
						$imagem,
						$preco,
						$descricao_short,
						$descricao_long,
						$cor,
						$aroma,
						$sabor,
						$teor_alcool,
						$acidez_total,
						$acidez_volatil,
						$ph,
						$extrato_seco,
						$conservacao,
						$servico,
						$desfrutar,
						$castas,
						$vinha
					);

					mysqli_stmt_fetch($stmt);


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

			<!-- Start main Content -->
			<div class="maincontent bg--white pt--80 pb--55">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-12">
							<div class="wn__single__product">
								<div class="row">
									<!-- MENSAGENS DE VALIDAÇÃO -->
									<?php
									if (isset($_GET["msg"])) {

										switch ($_GET["msg"]) {
											case 0:
												$message = "Adicionou o produto ao carrinho!";
												$class = "alert-success";
												break;
											case 1:
												$message = "Apanhei-te! Não te armes em esperto... ; )";
												$class = "alert-success";
												break;
											case 2:
												$message = "b";
												$class = "alert-danger";
												break;
											case 3:
												$message = "c";
												$class = "alert-danger";
												break;
											default:
												$_SESSION['msg'] =  false;
										}
										if (isset($_SESSION['msg']) && $_SESSION['msg'] == true) {
											echo "<div class=\"alert $class alert-dismissible col-12 fade show\" role=\"alert\">
                        " . $message . "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                        </div>";
											$_SESSION['msg'] = false;
										};
									}
									?>
									<!-- /MENSAGENS DE VALIDAÇÃO -->
									<div class="col-lg-6 col-12">
										<br>
										<br>
										<br>
										<br>
										<div class="wn__fotorama__wrapper">
											<div class="fotorama wn__fotorama__action" data-nav="thumbs">
												<a href="1.jpg"><img src="images/vinhos/450x565/<?= $imagem ?>" alt=""></a>
												<!-- <a href="2.jpg"><img src="images/product/2.jpg" alt=""></a>
											<a href="3.jpg"><img src="images/product/3.jpg" alt=""></a>
											<a href="4.jpg"><img src="images/product/4.jpg" alt=""></a>
											<a href="5.jpg"><img src="images/product/5.jpg" alt=""></a>
											<a href="6.jpg"><img src="images/product/6.jpg" alt=""></a>
											<a href="7.jpg"><img src="images/product/7.jpg" alt=""></a>
											<a href="8.jpg"><img src="images/product/8.jpg" alt=""></a> -->
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div>
											<br>
											<br>
											<br>
											<br>


										</div>
										<div class="product__info__main">
											<h1 class="text-warning"><?= $marca ?></h1>
											<h1><?= $nome ?></h1>
											<div class="price-box">
												<span><?= $preco ?>€</span>
											</div>
											<div class="product__overview">
												<p><?= $descricao_short ?></p>
											</div>
											<div class="product_meta">
												<span class="posted_in">Ano: <?= $ano ?>

												</span>
											</div>
											<div class="box-tocart d-flex mt-5">
												<span>Qty</span>
												<form action="scripts/sc_add_to_cart.php?idProduto=<?= $idProduto ?>" method="post">
													<input id="qty" class="input-text qty" name="qty" min="1" value="1" title="Qty" type="number">
													<div class="addtocart__actions">
														<button class="tocart" type="submit" title="Add to Cart">Add to
															Cart</button>
													</div>
												</form>
												<!-- <div class="product-addto-links clearfix">
													<a class="wishlist" href="#"></a>
													<a class="compare" href="#"></a>
												</div> -->
											</div>

											<div class="product-share">
												<ul>
													<li class="categories-title">Share :</li>
													<li>
														<a href="#">
															<i class="icon-social-twitter icons"></i>
														</a>
													</li>
													<li>
														<a href="#">
															<i class="icon-social-tumblr icons"></i>
														</a>
													</li>
													<li>
														<a href="#">
															<i class="icon-social-facebook icons"></i>
														</a>
													</li>
													<li>
														<a href="#">
															<i class="icon-social-linkedin icons"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Descrição -->

							<div class="product__info__detailed">
								<div class="pro_details_nav nav justify-content-start" role="tablist">
									<a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Detalhes</a>
									<a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Como servir</a>
								</div>
								<div class="tab__container">
									<!-- Start Single Tab Content -->
									<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
										<div class="description__attribute container">
											<section class="row">
												<div class="col-6">
													<p><?= $descricao_long ?></p>
													<h4 class="mt-3 font-weight-light text-warning">Notas de Prova</h4>
													<ul>
														<li><strong>Cor: </strong><?= $cor ?></li>
														<li><strong>Aroma: </strong><?= $aroma ?></li>
														<li><strong>Sabor: </strong><?= $sabor ?></li>
													</ul>
												</div>
												<div class="col-6">
													<h4 class="mt-3 font-weight-light text-warning">Especificações</h4>
													<ul>

														<li><strong> Teor Alcoólico: </strong><?= $teor_alcool ?> % vol</li>
														<li><strong>Acidez Total: </strong><?= $acidez_total ?> g/dm3</li>
														<li><strong>Acidez Volátil deduzida SO2: </strong><?= $acidez_volatil ?> g/dm3 (ácido acético)</li>
														<li><strong>pH : </strong><?= $ph ?></li>
														<li><strong>Extracto Seco Total: </strong><?= $extrato_seco ?> g/ dm3</li>
													</ul>
												</div>
											</section>
										</div>
									</div>
									<!-- End Single Tab Content -->
									<!-- Start Single Tab Content -->
									<div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
										<div class="container">
											<div class=" row">
												<section class="col-4">
													<p class="h4 font-weight-light text-warning">CONSUMO</p>
													<div>
														<p><span class="font-weight-bold">Conservação: </span><?= $conservacao ?>
														</p>
														<p><span class="font-weight-bold">Serviço: </span><?= $servico ?>
														</p>
														<p><span class="font-weight-bold">Sugestão Gastronómica: </span><?= $desfrutar ?>
														</p>
													</div>
												</section>
												<section class="col-4">
													<p class="h4 font-weight-light text-warning">CASTAS</p>
													<div>
														<p><?= $castas ?>
														</p>

													</div>
												</section>
												<section class="col-4">
													<p class="h4 font-weight-light text-warning">Vinha</p>
													<div>
														<p><?= $vinha ?>
														</p>
													</div>
												</section>
											</div>
										</div>

									</div>

								</div>
							</div>
							<!-- /Descrição -->
							<!-- End Single Tab Content -->



						</div>

					</div>
				</div>
			</div>
			<!-- End main Content -->
			<!-- Start Bradcaump area -->
			<div class="ht__bradcaump__area bg-image--4">
				<div class="container">
					<div class=" row">
						<div style="background-color: rgba(0,0,0,0.8)" class="col-12 p-5">
							<div class="bradcaump__inner text-center">
								<h2 class="bradcaump-title">Produto</h2>
								<nav class="bradcaump-content">
									<a class="breadcrumb_item" href="index.php">Home</a>
									<span class="brd-separetor">/</span>
									<span class="breadcrumb_item active">Produto</span>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Bradcaump area -->

			<?php
			include_once "components/cp_footer.php";
			?>


	</div>
	<!-- //Main wrapper -->

<?php }

		require_once "helpers/help_js_footer.php";
?>



</body>

</html>