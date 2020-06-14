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

    <title>aplans</title>

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
            function mostrarMsg(data1) {


                console.log(data1[0]['msgBool'])
                console.log(data1[0]['msg'])




                if (data1[0]['msgBool'] == true) {

                    switch (data1[0]['msg']) {
                        case 0:
                            $message = "Preencha todos os campos obrigatórios";
                            $class = "alert-warning";
                            break;
                        case 1:
                            $message = "O número de telemóvel inserido não é válido. Formato: 9Yx xxx xxx, onde Y pode tomar valores de [1,2,3,6]";
                            $class = "alert-warning";
                            break;
                        case 2:
                            $message = "O código postal inserido não é válido. Formato: xxxx-xxx";
                            $class = "alert-warning";
                            break;
                        case 3:
                            $message = "Credenciais inválidas! Tente novamente";
                            $class = "alert-danger";
                            break;
                        case 4:
                            $message = "Insira uma password";
                            $class = "alert-danger";
                            break;
                        case 5:
                            $message = "O email que inseriu, já existe.";
                            $class = "alert-danger";
                            break;
                        case 6:
                            $message = "As palavras passe não correspondem.";
                            $class = "alert-danger";
                            break;
                        case 7:
                            $message = "Utilizador Inserido com Sucesso";
                            $class = "alert-success";
                            break;
                        case 8:
                            $message = "Alterou os dados com sucesso!";
                            $class = "alert-success";
                            break;

                        default:
                            data1[0]['msgBool'] = false;
                    }
                    if (data1[0]['msgBool'] && data1[0]['msgBool'] == true) {

                        $('#alertMsg').html('');

                        var mensagem = '<div class=\"alert ' + $class + ' alert-dismissible fade show\"role=\"alert\">' + $message + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span>&times;</span></button></div>';

                        $('#alertMsg').append(mensagem);


                        data1[0]['msgBool'] = false;

                        //aviso de mensagem é eleminado passado 7segundos
                        setTimeout(function() {
                            $('#alertMsg').html('');;
                        }, 7000);

                    };
                }

            }
        </script>


        <script>
            function update(id, nome, filtro, tipo, descricao) {

                var query = "id" + id + "&nome=" + nome + "&filtro=" + filtro + "&tipo=" + tipo + "&descricao=" + descricao;

                console.log(query);





                $.ajax({ // ajax call starts
                        url: '../scripts/tarefas/sc_update_tabela.php',
                        data: query,
                        dataType: 'json', // Choosing a JSON datatype
                        type: 'GET',


                    })
                    .done(function(data) {
                        console.log(data[0]['estado']);

                        mostrarMsg(data);

                        search = $('#search').val();
                        ordem = $('#ordem').val();
                        items = $('#items').val();
                        categoria = $('#ordenarPor').val();
                        tabela(items, categoria, ordem, search, "manter");

                        // search = $('#search').val();
                        // ordem = $('#ordem').val();
                        // items = $('#items').val();
                        // categoria = $('#ordenarPor').val();
                        // tabela(items, categoria, ordem, search, "manter");
                    })

            }
        </script>
        <script>
            function apagar(id) {

                var query = "id=" + id;

                console.log(query);

                $.ajax({ // ajax call starts
                        url: '../scripts/tarefas/sc_delete_row.php',
                        data: query,
                        // dataType: 'json', // Choosing a JSON datatype
                        type: 'GET',
                    })
                    .done(function() {
                        //Mostrar mensagem

                    })
                    .fail(function() { // Se existir um erro no pedido
                        $('#users').html('Data ERROU1'); // Escreve mensagem de erro
                    });
            }
        </script>
        <script>
            function adicionar(id, nome, filtro, tipo, descricao) {

                var query1 = "nome=" + nome + "&filtro=" + filtro + "&tipo=" + tipo + "&descricao=" + descricao;

                console.log(query1);

                $.ajax({ // ajax call starts
                        url: '../scripts/tarefas/sc_adicionar_row.php',
                        data: query1,
                        dataType: 'json', // Choosing a JSON datatype
                        type: 'GET',
                    })
                    .done(function(data) {
                        mostrarMsg(data);




                    })
                    .fail(function() { // Se existir um erro no pedido
                        $('#users').html('Data ERReiiiiiiiiiii'); // Escreve mensagem de erro
                    });
            }
        </script>
        <script>
            var pagAtual = 1

            function tabela(items, coluna, ordenacao, search, pag) {

                if (pag != 1) {
                    pag = pagAtual;
                }



                var query = "items=" + items + "&col=" + coluna + "&ord=" + ordenacao + "&search=" + search + "&page=" + pag;

                $.when(
                        $.ajax({ // ajax call starts
                            url: '../ajax/tasks_table.php',
                            data: query,
                            dataType: 'json', // Choosing a JSON datatype
                            type: 'GET',

                        })

                    ).then(

                        function(data) { //abre o ficehrio JSON


                            $('#users').html(''); //limpa o conteúdo da tabela
                            $('#colunaTabela').html(''); //limpa o head da tabela
                            $('#paginas').html('');

                            if (ordenacao == "ASC") {
                                iconOrdenacao = "../../assets/ordenarDESC.png";
                            } else if (ordenacao == "DESC") {
                                iconOrdenacao = "../../assets/ordenarASC.png";
                            } else {
                                iconOrdenacao = ""
                            }



                            //Antes de escrever o conteúdo organizado, vamos escrever o head da tabela com a variável de ordenação atual para que no próximo clique, troque a ordem
                            var span = "<span><img class=\"ordenar\"src='" + iconOrdenacao + "'></span>";

                            var thead = "<tr class=\"bg-primary text-light \"><th id=\"nome\"class=\"coluna\">Nome</th><th id=\"filtro\"class=\"coluna\">Filtro</th><th id=\"tipo\"class=\"coluna\">Tipo</th><th id=\"descricao\"class=\"coluna\">Descrição</th><th id=\"acao\"class=\"coluna\">Ação</th><tr>"

                            $('#colunaTabela').append(thead);
                            if (coluna != "") {
                                $('#' + coluna + '').append(span);
                            }


                            for (var i in data) {

                                var linha = "<tr><th>" + data[i]["nome"] + "</th><th>" + data[i]["filtro"] + "</th><th>" + data[i]["tipo"] + "</th><th>" + data[i]["descricao"] + "</th><th><a href='#' data-toggle='modal' data-target='#myModal' data-id='" + i + "' class='editar'>Editar</a></th></tr>";
                                $('#users').append(linha);

                                resultados = data[i]["noPaginas"]
                            }

                            for (var index = 0; index < resultados; index++) {
                                NoEscrever = index + 1;

                                pages = "<a href=\"#\" id='" + NoEscrever + "' class=''>" + NoEscrever + "</a>"
                                $('#paginas').append(pages);


                                if (pag == NoEscrever) {
                                    $("#" + NoEscrever + "").addClass("active");
                                }

                            }

                            //Quando se clica no botão de editar de uma linha, escreve o conteúdo do modal 
                            $('.editar').on("click", function() {
                                var editarLinha = $(this).data('id');

                                var modal_editar_body = '<label class="col-12 pl-0 mb-0 mt-2">Nome</label><input name="nome" type="text" id="update_nome" value="' + data[editarLinha]['nome'] + '"><label class="col-12 pl-0 mb-0 mt-2">Filtro</label><select name="filtro" id="modal_filtro"></select><label class="col-12 pl-0 mb-0 mt-2">Tipo</label><input name="tipo" type="text" id="update_tipo" value="' + data[editarLinha]['descricao'] + '"><label class="col-12 pl-0 mb-0 mt-2">Descrição</label><input name="descricao" type="text" id="update_descricao" value="' + data[editarLinha]['descricao'] + '">';


                                $("#modal_editar").html(modal_editar_body);
                                $("#modal_filtro").html('');

                                //se o role do utilizador clicado for admin ou user, muda a option que está selecionada
                                if (data[editarLinha]['filtro'] == "Admin") {
                                    var add_role = '<option value="2" id="opcao_admin" selected="selected">Predefenido</option><option value="1" id="opcao_user">Criado</option>'

                                    $("#modal_filtro").append(add_role);
                                } else {
                                    var add_role = '<option value="2" id="opcao_admin">Predefenido</option><option value="1" id="opcao_user" selected="selected">Criado</option>'
                                    $("#modal_filtro").append(add_role);
                                }


                            });


                            //Quando se clica numa outra página no menu de navegação
                            $('#paginas a').on('click', function() { //tem que estar dentro da função tabela porque o menu de paginação é escrito dinamicamente depois da pág carregar
                                page = $(this).text()
                                pagAtual = $(this).text();


                                search = $('#search').val();
                                ordem = $('#ordem').val();
                                items = $('#items').val();
                                categoria = $('#ordenarPor').val();
                                tabela(items, categoria, ordem, search, page)
                            });

                        })
                    .fail(function() { // Se existir um erro no pedido
                        $('#users').html('Data ERROU2'); // Escreve mensagem de erro
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
                tabela(items, categoria, ordem, search, 1) //DEAFULT pág 1


                //QUANDO SE ESCOLHE OUTRO VALOR DE ITENS POR PÁG
                $('#items').change(function() {
                    categoria = $('#ordenarPor').val();
                    ordem = $('#ordem').val();
                    items = $(this).val();
                    search = $('#search').val();
                    tabela(items, categoria, ordem, search, 1)


                });
                $('#ordenarPor').change(function() {
                    ordem = $('#ordem').val();
                    items = $('#items').val();
                    categoria = $(this).val();
                    search = $('#search').val();
                    tabela(items, categoria, ordem, search, 1)
                })
                $('#ordem').change(function() {
                    ordem = $(this).val();
                    items = $('#items').val();
                    categoria = $('#ordenarPor').val();
                    search = $('#search').val();
                    tabela(items, categoria, ordem, search, 1)
                })

                $('#search').keyup(function() {
                    search = $(this).val();
                    ordem = $('#ordem').val();
                    items = $('#items').val();
                    categoria = $('#ordenarPor').val();
                    tabela(items, categoria, ordem, search, 1)
                });

                $('#guardar').on("click", function() {
                    id = $('#id').val();
                    nome = $('#update_nome').val();
                    filtro = $('#modal_filtro option').filter(":selected").val();
                    tipo = $('#update_tipo').val();
                    descricao = $('#update_descricao').val();

                    update(id, nome, filtro, tipo, descricao);







                });

                $('#apagar').on("click", function() {
                    id = $('#id').val();

                    apagar(id);

                    search = $('#search').val();
                    ordem = $('#ordem').val();
                    items = $('#items').val();
                    categoria = $('#ordenarPor').val();
                    tabela(items, categoria, ordem, search, "manter");

                });

                $('#submeter_row').on("click", function() {
                    nome = $('#add_nome').val();
                    filtro = $('#add_filtro option').filter(":selected").val();
                    tipo = $('#add_tipo').val();
                    descricao = $('#add_descricao').val();

                    adicionar(nome, filtro, tipo, descricao);

                    search = $('#search').val();
                    ordem = $('#ordem').val();
                    items = $('#items').val();
                    categoria = $('#ordenarPor').val();
                    tabela(items, categoria, ordem, search, "manter");


                });


                return false; // keeps the page from not refreshing

                function guardar() {

                }
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
                        <h1 class="h3 mb-0 text-gray-800">Gestão de Tarefas</h1>
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

                    <div id="alertMsg"></div>




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
                                    <option class="dropdown-item" value="filtro">Filtro</option>
                                    <option class="dropdown-item" value="descricao">Descricao</option>
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
                                        Tarefas
                                    </div>
                                    <div style="text-align: end;" class=" col-6">
                                        <button class="btn btn-default pull-right add-row" href='#' data-toggle='modal' data-target='#addRows' id="adicionar"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add Row</button>
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
                                                    <th id="filtro" class="coluna">
                                                        Filtro
                                                    </th>

                                                    <th id="tipo" class="coluna">
                                                        Tipo
                                                    </th>
                                                    <th id="descricao" class="coluna">
                                                        Descrição
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
                            <div class="pagination">

                                <a href="#" id="-1">&laquo;</a>
                                <span id="paginas">

                                </span>

                                <a href="#" id="-2">&raquo;</a>
                            </div>
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
                            <div class="modal-body" id="modal_editar">


                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-default" id="apagar" data-dismiss="modal">Delete Row</button>
                                <button class="btn btn-default" id="guardar" data-dismiss="modal">Save</button>
                            </div>
                            <!-- </form> -->


                        </div>

                    </div>
                </div>

            </div>
            <div class="container">
                <!-- Modal -->
                <div class="modal fade" id="addRows" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">
                                <!-- <form action="#" method="" class=""> -->
                                <label class="col-12 pl-0 mb-0 mt-2">Nome</label>
                                <input name="nome" type="text" id="add_nome" value="">
                                <label class="col-12 pl-0 mb-0 mt-2">Filtro</label>
                                <select name="filtro" id="add_filtro">
                                    <option value="2" id="add_opcao_admin">Predefenido</option>
                                    <option value="1" id="add_opcao_user" selected="selected">Criado</option>
                                </select>
                                <label class="col-12 pl-0 mb-0 mt-2">Descricao</label>
                                <input name="descricao" type="text" id="add_descricao_user" value="">



                                <div class="modal-footer">
                                    <button class="btn btn-default" id="submeter_row" data-dismiss="modal">Save</button>
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