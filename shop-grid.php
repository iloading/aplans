<?php session_start();
require_once "connections/connection.php";
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<?php include_once "helpers/help_meta.php" ?>
	<title>Loja | Carregosa Vinhos</title>
	<?php include_once "helpers/help_css.php" ?>
</head>

<body>

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">

		<!-- Header -->
		<?php include_once "components/cp_header.php" ?>
		<!-- //Header -->

		<!-- Start Bradcaump area -->
		<div class="ht__bradcaump__area bg-image--6">
			<div class="container p-0" style="background-color: rgba(0,0,0,0.8)">
				<div class=" row">
					<div class="col-12 p-5" ">
						<div class=" bradcaump__inner text-center">
						<h2 class="bradcaump-title">Loja</h2>
						<nav class="bradcaump-content">
							<a class="breadcrumb_item" href="index.php">Home</a>
							<span class="brd-separetor">/</span>
							<span class="breadcrumb_item active">Shop Grid</span>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Bradcaump area -->
	<!-- Start Shop Page -->
	<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg" id="all">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
					<div class="shop__sidebar">

						<aside class="wedget__categories pro--range">
							<h3 class="wedget__title">Filtrar por Marca</h3>
							<div class="content-shopby">
								<div class="price_filter s-filter clear">
									<form action="#all" method="get">
										<select class="selectpicker" id="marcaFilter" name="marca" onchange="this.form.submit();">
											<option value="0">Todas as marcas</option>
											<?php


											$link = new_db_connection();

											$stmt = mysqli_stmt_init($link);

											$query = "SELECT idmarca, nome FROM marca";
											if (mysqli_stmt_prepare($stmt, $query)) {

												if (isset($_GET['marca'])) {
												}

												if (mysqli_stmt_execute($stmt)) {

													mysqli_stmt_bind_result($stmt, $idmarca, $nome_marca);

													while (mysqli_stmt_fetch($stmt)) {
														if ($idmarca == $_GET['marca']) {
															echo '<option selected value="' . $idmarca . '">' . $nome_marca . '</option>';
														} else {
															echo '<option value="' . $idmarca . '">' . $nome_marca . '</option>';
														}
													}
												}
											}

											?>
										</select>
									</form>
								</div>
							</div>
						</aside>

					</div>
				</div>
				<div class="col-lg-9 col-12 order-1 order-lg-2">
					<div class="row">
						<div class="col-lg-12">
							<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
								<div class="shop__list nav justify-content-center" role="tablist">
									<a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>

								</div>
								<p>Lista de Vinhos</p>
								<div class="orderby__wrapper">
									<span>Sort By</span>
									<select class="shot__byselect">
										<option></option>
										<option>No</option>
										<option>Time</option>
										<option>4</option>
										<option>Dis</option>
										<option>STONKS</option>
									</select>

								</div>
							</div>
						</div>
					</div>
					<div class="tab__container">
						<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
							<div class="row">
								<?php include_once "components/cp_shop.php" ?>
							</div>
							<ul class="wn__pagination">
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Shop Page -->
	<?php
	include_once "components/cp_footer.php";
	?>

	</div>
	<!-- //Main wrapper -->
	<?php
	require_once "helpers/help_js_footer.php";
	?>
</body>

</html>