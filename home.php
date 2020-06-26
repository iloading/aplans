<?php session_start();
require_once "connections/connection.php";
require_once "admin/scripts/sc_check_admin.php";

if (isset($_SESSION['email_aplans'])) {
?>

    <!doctype html>
    <html class="no-js" lang="zxx">

    <head>
        <?php include_once "helpers/help_meta.php" ?>
        <title>Aplans</title>
        <?php include_once "helpers/help_css.php" ?>





    </head>

    <body>


        <div id="conteudoPagina">
            <?php
            if ($admin != 1) {
                //include_once "components/cp_index_mobile.php";
            } else {
                //include_once "admin/components/c_navbars_side_index.php";
            }
            ?>

        </div>


        <?php include_once "helpers/help_js.php" ?>
        <?php include_once "ajax/scripts.html" ?>
        <script>
            $(document).ready(function() {
                mostrarHome();
            })
        </script>
    </body>

    </html>
<?php
} else {
    header("Location: login.php");
}
