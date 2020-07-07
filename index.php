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
        <!-- Include jQuery Mobile stylesheets -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- Include the jQuery Mobile library -->
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script>
            
                $("#conteudoPagina").on("swipe", function(event){
                    console.log("123");
                });
        
    
        </script>
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
