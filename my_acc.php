<?php session_start();
require_once "connections/connection.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php include_once "helpers/help_meta.php" ?>
    <title>A Minha Conta | Carregosa Vinhos</title>
    <?php include_once "helpers/help_css.php";

    //VERIFICAR SE EXISTE UMA SESSÃO INICIADA PARA TER ACESSO À Página


    ?>

</head>

<body>
    <?php if (isset($_SESSION['email_iloading'])) { ?>
        <!-- Main wrapper -->
        <div class="wrapper" id="wrapper">
            <!-- Header -->
            <?php require_once "components/cp_header.php" ?>
            <!-- Start BANNER area -->
            <div class="ht__bradcaump__area bg-image--6">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">A minha conta</h2>
                                <nav class="bradcaump-content">
                                    <a class="breadcrumb_item" href="index.php">Home</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb_item active">My Account</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End BANNER area -->


            <section class="my_account_area pt--80 pb--55 bg--white">
                <div class="container">

                    <!-- MENSAGENS DE VALIDAÇÃO -->
                    <?php
                    if (isset($_GET["msg"])) {

                        switch ($_GET["msg"]) {
                            case 0:
                                $message = "Nada mudou. Quer mudar o nome? Que tal experimentar X Æ A-12 ?";
                                $class = "alert-warning";
                                break;
                            case 1:
                                $message = "Alteração efetuada com sucesso";
                                $class = "alert-success";
                                break;
                            case 2:
                                $message = "Algo correu mal... ";
                                $class = "alert-danger";
                                break;
                            case 3:
                                $message = "Uiui ... erro very bad... My battery is low and it’s getting dark - NASA Opportunity ; ) You tried ";
                                $class = "alert-danger";
                                break;
                            case 4:
                                $message = "Nenhuma alteração foi feita, por favor verifique os dados que submeteu";
                                $class = "alert-warning";
                                break;
                            case 5:
                                $message = "Dados inválidos, por favor tente novamente";
                                $class = "alert-warning";
                                break;
                            case 6:
                                $message = "Palavra pass errada, tente outra vez";
                                $class = "alert-danger";
                                break;
                            case 7:
                                $message = "Por favor preencha todos os dados para inserir o produto com sucesso na Base de Dados";
                                $class = "alert-warning";
                                break;
                            case 8:
                                $message = "Adicionou o produto à Base de Dados com sucesso! O mesmo já pode ser visto na página inicial.";
                                $class = "alert-success";
                                break;
                            case 9:
                                $message = "Ocorreu um erro no upload da imagem, por favor tente novamente. ";
                                $class = "alert-danger";
                                break;
                            case 10:
                                $message = "Ocorreu um erro no upload da imagem! Apenas JPG, JPEG, PNG & GIF são permitidos. GIIIIFSSS BOYSSSS ADICIONEM GIIIIFS";
                                $class = "alert-danger";
                                break;
                            case 11:
                                $message = "Ocorreu um erro no upload da imagem! Esse ficheiro já existe na BD.";
                                $class = "alert-danger";
                                break;
                            case 14:
                                $message = "Ocorreu um erro no Insert! Mas a imagem deu upload com sucesso! ";
                                $class = "alert-danger";
                                break;
                            default:
                                $_SESSION['msg'] =  false;
                        }
                        if (isset($_SESSION['msg']) && $_SESSION['msg'] == true) {
                            echo "<div class=\"alert $class alert-dismissible fade show\" role=\"alert\">
                        " . $message . "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                        </div>";
                            $_SESSION['msg'] = false;
                        };
                    }
                    ?>

                    <!-- PAINEIS DE GESTÃO -->
                    <div class="row">
                        <?php
                        include_once "components/cp_meus_dados.php";
                        if (isset($_SESSION['role_iloading']) && $_SESSION['role_iloading'] == 1) {
                            include_once "components/cp_admin_panel.php";
                        }
                        ?>
                    </div>
                </div>
            </section>
            <!-- End My Account Area -->

            <?php include_once "components/cp_footer.php" ?>

        </div>
        <!-- //Main wrapper -->

        <!-- JS Files -->
        <?php include_once "helpers/help_js.php" ?>

</body>

</html>
<?php
    } else {
        $_SESSION['msg'] = true;
        header("Location: login.php?msg=0");
    }
?>