<?php
session_start();
require_once "connections/connection.php";
if (isset($_SESSION['id_user_iloading'])) {



?>
	<!doctype html>
	<html class="no-js" lang="zxx">

	<head>
		<?php include_once "helpers/help_meta.php" ?>
		<title>Carrinho | Carregosa Vinhos</title>
		<?php include_once "helpers/help_css.php" ?>
	</head>

	<body>

		<!-- Main wrapper -->
		<div class="wrapper" id="wrapper">

			<!-- Header -->
			<?php include_once "components/cp_header.php"


			?>
			<!-- //Header -->

			<!-- Start Bradcaump area -->
			<div class="ht__bradcaump__area bg-image--3">
				<div style="background-color: rgba(0,0,0,0.5)" class="container col-12 p-5">
					<div class="row">
						<div class="col-lg-12">
							<div class="bradcaump__inner text-center">
								<h2 class="bradcaump-title">Shopping Cart</h2>
								<nav class="bradcaump-content">
									<a class="breadcrumb_item" href="index.php">Home</a>
									<span class="brd-separetor">/</span>
									<span class="breadcrumb_item active">Shopping Cart</span>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Bradcaump area -->

			<!-- cart-main-area start -->
			<div class="cart-main-area section-padding--lg bg--white">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 ol-lg-12">
							<form action="#">
								<div class="table-content wnro__table table-responsive">
									<table>
										<thead>
											<tr class="title-top">
												<th class="product-thumbnail">Image</th>
												<th class="product-name">Product</th>
												<th class="product-price">Marca</th>
												<th class="product-price">Price</th>
												<th class="product-quantity">Quantity</th>
												<th class="product-subtotal">Total</th>
												<th class="product-remove">Remove</th>
											</tr>
										</thead>
										<tbody>

											<?php
											if (count($produtos_no_carrinho) == 0) {
												echo '<div class="h5 text-center">O seu carrinho está vazio</div>';
											} else {


												for ($i = 0; $i < count($produtos_no_carrinho); $i++) {
													echo '<tr>
											<td class="product-thumbnail"><a href="single-product.php?idproduto=' . $produtos_no_carrinho[$i]['id'] . '"><img src="images/vinhos/75x94/' . $produtos_no_carrinho[$i]['img'] . '" alt="product img"></a></td>
											<td class="product-name"><a href="single-product.php?idproduto=' . $produtos_no_carrinho[$i]['id'] . '">' . $produtos_no_carrinho[$i]['nome'] . '</a></td>
											<td class="product-name"><span class="amount text-warning"><a>' . $produtos_no_carrinho[$i]['marca'] . '</a></span></td>
											<td class="product-price"><span class="amount">' . $produtos_no_carrinho[$i]['prcIndividual'] . '€</span></td>
											<td class="product-quantity">' . $produtos_no_carrinho[$i]['qty'] . '</td>
											<td class="product-subtotal">' . $produtos_no_carrinho[$i]['prc_total_produto'] . '€</td>
											<td class="product-remove"><a href="scripts/sc_delete_from_cart.php?idproduto=' . $produtos_no_carrinho[$i]['id'] . '">X</a></td>
										</tr>';
												}
											}
											// }
											?>

										</tbody>
									</table>
								</div>

								<div class="cartbox__btn">
									<ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap" style="justify-content: space-evenly;">

										<li><a href="#">Check Out</a></li>

									</ul>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 offset-lg-6">
						<div class="cartbox__total__area">
							<div class="cartbox-total d-flex justify-content-between">
							</div>
							<div class="cart__total__amount">
								<span>Grand Total</span>
								<span><?= $precoTotalCarrinho ?>€</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- cart-main-area end -->
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
<?php
} else {
	$_SESSION['msg'] = true;
	header('Location: login.php?msg=0');
}
?>