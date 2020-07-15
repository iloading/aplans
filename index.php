<?php session_start();
require_once "connections/connection.php";
require_once "admin/scripts/sc_check_admin.php";

if (!isset($_COOKIE['email']) && !isset($_COOKIE['id']) && !isset($_COOKIE['role'])) {
    header("location: login.php");
} else {
    $_SESSION["email_aplans"] = $_COOKIE['email'];
    $_SESSION['id_user_aplans'] = $_COOKIE['id'];
    $_SESSION['role_aplans'] = $_COOKIE['role'];
}

// if (isset($_SESSION["msg"])) {
//     $msgInfo = $_SESSION["msg"];
//     switch ($msgInfo) {
//         case '1':
//             $msgConteudo = '<div class="alert alert-success m-0 p-3">O evento foi criado com sucesso! <span id="close-info" class="close">x</span></li></div>';
//             break;
//         case '2':
//             $msgConteudo = '<div class="alert alert-danger m-0 p-3">Ocorreu um erro na criação do evento. Não inseriu os dados todos corretamente.<span id="close-info" class="close">x</span></li></div>';
//             break;

//         default:
//             $msgConteudo = "";
//             break;
//     }
// } else {
//     $msgConteudo = "";
// }


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
        <div id="mensagemInfo" class="d-none"></div>
        <div id="conteudoPagina">


        </div>


        <?php include_once "helpers/help_js.php" ?>
        <?php include_once "ajax/home.html" ?>
        <?php include_once "ajax/evento.html" ?>
        <?php include_once "ajax/criar_evento.html" ?>
        <?php include_once "ajax/settings.html" ?>




        <script>
            /*Calcula a altura do conteudo consoante o tamanho do ecra que estamos a usar para que não fique com barras brancas no final da página*/
            function alturaConteudo() {
                if ($(window).height() > $("main").height()) {
                    $("main").css("height", $(window).height())
                }
            }


            function mostrarInfo(msg) {

                switch (msg) {
                    case '1':
                        msgConteudo = '<div class="alert alert-success m-0 p-3">O evento foi criado com sucesso! <span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '2':
                        msgConteudo = '<div class="alert alert-danger m-0 p-3">Ocorreu um erro na criação do evento. Não inseriu os dados todos corretamente.<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '3':
                        msgConteudo = '<div class="alert alert-success m-0 p-3">Foi adicionado ao evento com sucesso<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '4':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Abandonou o evento com sucesso<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '5':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Já não é o organizador do evento! Pode agora abandonar o mesmo.<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;

                    default:
                        msgConteudo = "";
                        break;

                }

                $('#mensagemInfo').removeClass("d-none");
                $('#mensagemInfo').html(msgConteudo);


                setTimeout(() => {
                    $('#mensagemInfo').html(" ");
                    $('#mensagemInfo').addClass("d-none");
                }, 5000);

            }

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
                idEvento = $(this).attr("id")

                mostrarEvento(idEvento)

                $(document).on('click', '.botaoParticipar', function() {
                    participarEvento(idEvento)
                });
                $(document).on('click', '.botaoAbandonar', function() {
                    abandonarEvento(idEvento)
                });





                /*Quando se clica no botão das settings dentro de um evento, o conteudo da div "conteudoPagina" é apagado e reescrito através desta nova função que irá mostrar a interface das settings de um evento*/
                $(document).on('click', '#settings_evento', function() {
                    settingsEvento(idEvento)
                });
            });

            /* Quando se clica no botão de adicionar evento, o conteudo da div "conteudoPagina" é apagado e reescrito através desta nova funçao que irá mostrar a interface de criação do evento*/
            $(document).on('click', '.add-event', function() {
                mostrarCriarEvento()
            });



            $('#mensagemInfo').on('click', function() {

                $(this).html(" ");
                <?php
                unset($_SESSION['msg'])
                ?>
            })
        </script>


        <script>

        </script>

    </body>

    </html>
<?php
} else {
    header("Location: login.php");
}
