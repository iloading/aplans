<?php
session_start();
require_once "../../connections/connection.php";
require_once "../scripts/sc_check_admin.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TESTE12</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>




    <!-- Recolher todos os utilizadores na tabela users -->
    <?php
    if ($admin == 1) {
    ?>

        <script>
            function update(email_velho, email_novo) {

                var query = "email_velho=" + email_velho + "&email_novo=" + email_novo;

                $.ajax({ // ajax call starts
                        url: '../scripts/sc_update_tabela.php',
                        data: query,
                        // dataType: 'json', // Choosing a JSON datatype
                        type: 'GET',
                    })
                    .done(function() {
                        search = $('#search').val();
                        ordem = $('#ordem').val();
                        items = $('#items').val();
                        categoria = $('#ordenarPor').val();
                        tabela(items, categoria, ordem, search)
                    })
            }
        </script>
        <script>
            function tabela(items, coluna, ordenacao, search) {


                var query = "items=" + items + "&col=" + coluna + "&ord=" + ordenacao + "&search=" + search;


                $.ajax({ // ajax call starts
                        url: '../ajax/users_table.php',
                        data: query,
                        dataType: 'json', // Choosing a JSON datatype
                        type: 'GET',
                    })
                    .done(function(data) { //abre o ficehrio JSON


                        $('#users').html(''); //limpa o conteúdo da tabela
                        $('#colunaTabela').html(''); //limpa o head da tabela

                        if (ordenacao == "ASC") {
                            iconOrdenacao = "../../assets/ordenarDESC.png";
                        } else if (ordenacao == "DESC") {
                            iconOrdenacao = "../../assets/ordenarASC.png";
                        } else {
                            iconOrdenacao = ""
                        }



                        //Antes de escrever o conteúdo organizado, vamos escrever o head da tabela com a variável de ordenação atual para que no próximo clique, troque a ordem
                        var span = "<span><img class=\"ordenar\"src='" + iconOrdenacao + "'></span>";

                        var thead = "<tr class=\"bg-primary text-light \"><th id=\"nome\"class=\"coluna\">Nome</th><th id=\"email\"class=\"coluna\">Email</th><th id=\"role\"class=\"coluna\">Cargo</th><th id=\"telemovel\"class=\"coluna\">Telemóvel</th><th id=\"morada\"class=\"coluna\">Morada</th><th id=\"codigo_postal\"class=\"coluna\">Código Postal</th><th id=\"acao\"class=\"coluna\">Ação</th><tr>"

                        $('#colunaTabela').append(thead);
                        if (coluna != "") {
                            $('#' + coluna + '').append(span);
                        }


                        for (var i in data) {

                            var linha = "<tr><th>" + data[i]["nome"] + "</th><th>" + data[i]["email"] + "</th><th>" + data[i]["role"] + "</th><th>" + data[i]["telemovel"] + "</th><th>" + data[i]["morada"] + "</th><th>" + data[i]["codigo_postal"] + "</th><th><a href='#' data-toggle='modal' data-target='#myModal' data-id='" + i + "' class='editar'>Editar</a></th></tr>";
                            $('#users').append(linha);

                            $('.editar').on("click", function() {
                                var editarLinha = $(this).data('id');
                                $(".modal-body #nome").val(data[editarLinha]['nome']);
                                $(".modal-body #email_user").val(data[editarLinha]['email']);
                                $(".modal-body #role").val(data[editarLinha]['role']);
                                $(".modal-body #telemovel").val(data[editarLinha]['telemovel']);
                                $(".modal-body #morada").val(data[editarLinha]['morada']);
                                $(".modal-body #codigo_postal").val(data[editarLinha]['codigo_postal']);


                                $(".modal-body #email_editar").val(data[editarLinha]['email']);

                            });
                        }

                    })
                    .fail(function() { // Se existir um erro no pedido
                        $('#users').html('Data ERROU'); // Escreve mensagem de erro na listagem de vinhos
                    });

                return false; // keeps the page from not refreshing
            };
        </script>

        <script>
            $(document).ready(function() {
                categoria = $('#ordenarPor').val();
                ordem = $('#ordem').val();
                items = $('#items').val();
                search = $('#search').val();
                tabela(items, categoria, ordem, search) //DEFAULT


                //QUANDO SE ESCOLHE OUTRO VALOR DE ITENS POR PÁG
                $('#items').change(function() {
                    categoria = $('#ordenarPor').val();
                    ordem = $('#ordem').val();
                    items = $(this).val();
                    search = $('#search').val();
                    tabela(items, categoria, ordem, search)


                });
                $('#ordenarPor').change(function() {
                    ordem = $('#ordem').val();
                    items = $('#items').val();
                    categoria = $(this).val();
                    search = $('#search').val();
                    tabela(items, categoria, ordem, search)
                })
                $('#ordem').change(function() {
                    ordem = $(this).val();
                    items = $('#items').val();
                    categoria = $('#ordenarPor').val();
                    search = $('#search').val();
                    tabela(items, categoria, ordem, search)
                })

                $('#search').keyup(function() {
                    search = $(this).val();
                    ordem = $('#ordem').val();
                    items = $('#items').val();
                    categoria = $('#ordenarPor').val();
                    tabela(items, categoria, ordem, search)
                });

                $('#guardar').on("click", function() {
                    email_velho = $('#email_editar').val();
                    email_novo = $('#email_user').val();
                    
                    update(email_velho, email_novo);
                    

                });


                return false; // keeps the page from not refreshing
            });
        </script>
        <!-- /.Recolher todos os utilizadores na tabela users -->



    <?php
    }
    ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include_once "../components/c_navbars_side.php";
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                //include_once "../components/c_navbars_top.php";
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mt-4">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Gestão de utilizadores</h1>
                        <form class="d-none d-sm-inline-block form-inline ml-auto mr-0 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" id="search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Dropdown itens por página -->
                    <div class="container-fluid p-0">
                        <section class="row">
                            <form action="" method="GET" class="col-3">
                                <label>Itens por página:</label>
                                <select class="" id="items" name="items">
                                    <option selected="selected" class="dropdown-item " value="3">3</option>
                                    <option class="dropdown-item " value="5">5</option>
                                    <option class="dropdown-item" value="10">10</option>
                                    <option class="dropdown-item" value="20">20</option>
                                </select>
                            </form>
                            <form action="" method="GET" class="col-3">
                                <label>Ordenar por:</label>
                                <select class="" id="ordenarPor" name="items">
                                    <option class="dropdown-item " selected="selected" value="nome">Nome</option>
                                    <option class="dropdown-item" value="email">Email</option>
                                    <option class="dropdown-item" value="role">Cargo</option>
                                    <option class="dropdown-item" value="telemovel">Telemóvel</option>
                                    <option class="dropdown-item" value="morada">Morada</option>
                                    <option class="dropdown-item" value="codigo_postal">Codigo Postal</option>
                                </select>
                            </form>
                            <form action="" method="GET" class="col-3">
                                <label>De forma:</label>
                                <select class="" id="ordem" name="items">
                                    <option selected="selected" class="dropdown-item " value="ASC">Ascendente</option>
                                    <option class="dropdown-item " value="DESC">Descendente</option>
                                </select>
                            </form>
                        </section>
                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="row">
                                    <div class="panel-heading col-6">
                                        Utilizadores registados
                                    </div>
                                    <div style="text-align: end;" class=" col-6">
                                        <button class="btn btn-default pull-right add-row"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add Row</button>
                                    </div>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="table" class="table table-striped table-hover">
                                            <thead id="colunaTabela">
                                                <tr class="bg-primary text-light cursorclick">
                                                    <th id="nome" class="coluna">
                                                        Nome
                                                    </th>
                                                    <th id="email" class="coluna">
                                                        Email
                                                    </th>
                                                    <th id="role" class="coluna">
                                                        Cargo
                                                    </th>
                                                    <th id="telemovel" class="coluna">
                                                        Telemóvel
                                                    </th>
                                                    <th id="morada" class="coluna">
                                                        Morada
                                                    </th>
                                                    <th id="codigo_postal" class="coluna">
                                                        Código Postal
                                                    </th>
                                                    <th id="acao" class="coluna">
                                                        Ação
                                                    </th>


                                                </tr>

                                            </thead>

                                            <!-- Conteudo a ser escrito dinamicamente em JS e AJAX -->
                                            <tbody id="users">

                                            </tbody>
                                            <!-- /.Conteudo a ser escrito dinamicamente em JS e AJAX -->


                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>

                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <div class="container">
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <!-- <form action="#" method="" class=""> -->
                                <label class="col-12">Nome</label>
                                <input name="nome" type="text" id="nome">
                                <label class="col-12">Email</label>
                                <input name="email" type="text" id="email_user">
                                <label class="col-12">Cargo</label>
                                <input name="role" type="text" id="role">
                                <label class="col-12">Telemóvel</label>
                                <input name="telemovel" type="text" id="telemovel">
                                <label class="col-12">Morada</label>
                                <input name="morada" type="text" id="morada">
                                <label class="col-12">Código Postal</label>
                                <input name="codigo_postal" type="text" id="codigo_postal">
                                <input name="emailEditar" type="hidden" id="email_editar">

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Delete Row</button>
                                    <button class="btn btn-default" id="guardar" data-dismiss="modal">Save</button>
                                </div>
                                <!-- </form> -->
                            </div>

                        </div>

                    </div>
                </div>

            </div>



            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>



</html>