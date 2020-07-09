<?php session_start();
require_once "connections/connection.php";
require_once "admin/scripts/sc_check_admin.php";

if (!isset($_COOKIE['email']) && !isset($_COOKIE['id']) && !isset($_COOKIE['role']) ) {
    header("location: login.php");
}else{
    $_SESSION["email_aplans"] = $_COOKIE['email'];
    $_SESSION['id_user_aplans'] = $_COOKIE['id'];
    $_SESSION['role_aplans'] = $_COOKIE['role'];
}



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
            /*Carrega a página Home quando a página index.php é carregada pela primeira vez*/
            $(document).ready(function() {
                mostrarHome();
            });

            /*
            Quando se clica num evento, o conteudo da div "conteudoPagina" é apagado e reescrito através desta nova funçao que irá mostrar a interface do evento
            É necessário este formato visto que escrevemos os elementos dinamicamente na página e não seriam acessíveis de outra forma
            É passado o id do evento correspondente ao botao onde clicámos na página home como parametro da função
            */
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
