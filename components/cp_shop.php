<?php
$link = new_db_connection();

$stmt = mysqli_stmt_init($link);


// Se não houver filtro, seleciona todos os vinhos
if (!isset($_GET['marca']) || $_GET['marca'] == 0) {
		$query =
			"SELECT id, ref_marca_id, marca.nome,	principal_produto_vinho.nome,	imagem,	preco,	descricao_short,	descricao_long 
		FROM principal_produto_vinho 
		INNER JOIN marca 
		ON ref_marca_id=idmarca ";

	//SE CHEGAR À PÁGINA PELA SEARCH BAR 
	if (isset($_POST['pesquisa'])) {

	//Precisa de % para o prepared statment
	$pesquisa = "%{$_POST['pesquisa']}%";
		
		if ($pesquisa == '') {
			$query = "SELECT id, ref_marca_id, marca.nome,	principal_produto_vinho.nome,	imagem,	preco,	descricao_short,	descricao_long FROM principal_produto_vinho INNER JOIN marca ON ref_marca_id=idmarca";
		}else {
			$query = "SELECT id, ref_marca_id, marca.nome,	principal_produto_vinho.nome,	imagem,	preco,	descricao_short,	descricao_long FROM principal_produto_vinho INNER JOIN marca ON ref_marca_id=idmarca WHERE 	principal_produto_vinho.nome LIKE ?";
		}
	}
}else { //se houver filtro seleciona apenas os vinhos da marca selecionada
	$query = "SELECT id, ref_marca_id, marca.nome,	principal_produto_vinho.nome,	imagem,	preco,	descricao_short,	descricao_long FROM principal_produto_vinho INNER JOIN marca ON ref_marca_id=idmarca WHERE idmarca = ? ";
}


if (mysqli_stmt_prepare($stmt, $query)) {
	
	if (isset($_GET['marca']) && $_GET['marca'] != 0) {
		mysqli_stmt_bind_param($stmt, 'i', $_GET['marca']);
	}
	if (isset($pesquisa)) {
		mysqli_stmt_bind_param($stmt, 's', $pesquisa );
	}

	if (mysqli_stmt_execute($stmt)) {

		mysqli_stmt_bind_result(
			$stmt,
			$id,
			$ref_marca_id,
			$marca,
			$nome,
			$imagem,
			$preco,
			$descricao_short,
			$descricao_long
		);

		while (mysqli_stmt_fetch($stmt)) {
			echo '
			<!-- Start Single Product -->
			<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="product__thumb">
					<a class="first__img" href="single-product.php?idproduto=' . $id . '"><img src="images/vinhos/270x340/' . $imagem . '" alt="product image"></a>
					
					</div>
					<div class="product__content content--center">
						<h4><a href="single-product.html">' . $nome . '</a></h4>
						<h4><a class="text-warning font-weight-light" href="single-product.html">' . $marca . '</a></h4>
						<ul class="prize d-flex">
							<li>' . $preco . '€</li>
							
						</ul>
						<div class="action">
						<div class="actions_inner">
							<ul class="add_to_links">
								<li><a class="cart" href="#"><i class="bi bi-shopping-bag4"></i></a></li>
								<li><a class="wishlist" href="#"><i class="bi bi-shopping-cart-full"></i></a></li>
								<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
								<li><a data-toggle="" title="Quick View" class="quickview modal-view detail-link" href="#"><i class="bi bi-search"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="product__hover--content">
						<ul class="rating d-flex">
							<li class="on"><i class="fa fa-star-o"></i></li>
							<li class="on"><i class="fa fa-star-o"></i></li>
							<li class="on"><i class="fa fa-star-o"></i></li>
							<li class="on"><i class="fa fa-star-o"></i></li>
							<li class="on"><i class="fa fa-star-o"></i></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End Single Product -->';
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