<?php session_start();
require_once "connections/connection.php";
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<?php include_once "helpers/help_meta.php" ?>
	<title>Carregosa Vinhos</title>
	<?php include_once "helpers/help_css.php" ?>
	
    
</head>

<body>

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		
		<?php
			include_once "admin/components/c_navbars_side_index.php";
		?>

		<img src="images/PEPE.gif">
		<h1>WhY YoU Nu AdMiN</h1>
	<!-- //Main wrapper -->

<!-- Bootstrap core JavaScript-->
<script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/js/demo/chart-area-demo.js"></script>
    <script src="admin/js/demo/chart-pie-demo.js"></script>
</body>

</html>