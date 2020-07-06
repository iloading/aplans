<?php session_start();
require_once "connections/connection.php";
require_once "admin/scripts/sc_check_admin.php";

if (isset($_SESSION['email_aplans'])) {
?>

    <!doctype html>
    <html lang="en">

    <head>
        <?php include_once "helpers/help_meta.php" ?>
        <title>Aplans</title>
        <?php include_once "helpers/help_css.php" ?>
    </head>

    <body class="p-0">

        <div id="conteudoPagina">


        </div>


        <?php include_once "helpers/help_js.php" ?>
        <?php include_once "ajax/home.html" ?>
        <?php include_once "ajax/evento.html" ?>




        <script>
            $(document).ready(function() {
                mostrarHome();
            });

            //É necessário este formato visto que escrevemos os elementos dinamicamente na página e não seriam acessíveis de outra forma
            $(document).on('click', '.btn-evento', function() {
                mostrarEvento($(this).attr("id"))
            });

            
        </script>
        
    </body>

    </html>
<?php
} else {
    header("Location: login.php");
}
