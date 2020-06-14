<?php
session_start();
require_once "connections/connection.php";
?>
<!doctype html>
<html lang="zxx">

<head>
	<?php include_once "helpers/help_meta.php" ?>
	<title>Aplans</title>
	<?php include_once "helpers/help_css.php" ?>
</head>

<body>
		<!-- Login e Registo -->
	
			

				

					<?php
					//SE NAO ESTIVERMOS LOGADOS MOSTRA OS CAMPOS PARA PREENCHER, SE NAO, AVISA QUE JÁ ESTAMOS LOGADOS
					if (!isset($_SESSION['email_iloading'])) {
						include_once "components/cp_login.php";

					} else {
						echo '<div class="alert alert-danger col-12 text-center h2 alert-dismissible fade show" role="alert">
                        Já se encontra logado
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
					}

					?>
				
			</div>
		



	<!-- JS Files -->
	<?php include_once "helpers/help_js.php" ?>

</body>

</html>


