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


<script>
	function checkPass() {
		//Store the password field objects into variables ...
		var pass1 = $("#register-form #password");
		var pass2 = $("#register-form #password_confirm");

		console.log(pass1.value, pass2);
		//Store the Confimation Message Object ...
		var message = $('#confirmMessage');
		//Set the colors we will be using ...
		var goodColor = "#66cc66";
		var badColor = "#ff6666";
		//Compare the values in the password field
		//and the confirmation field
		if (pass1.val() == pass2.val()) {
			//The passwords match.
			//Set the color to the good color and inform
			//the user that they have entered the correct password
			pass2.css("backgroundColor", goodColor);
			message.css("color", goodColor);
			message.html("Passwords Match");
		} else {
			//The passwords do not match.
			//Set the color to the bad color and
			//notify the user.
			pass2.css("backgroundColor", badColor);
			message.css("color", badColor);
			message.html("Passwords Do Not Match!");
		}
	}
</script>