<?php
$id = $_SESSION['id_user_iloading'];

if (isset($_POST['userescolhido'])) {
    $id_escolhido = $_POST['userescolhido'];
}

$link = new_db_connection();

$stmt = mysqli_stmt_init($link);

$query = "SELECT id, ref_roles_codigo, email, password, nome, apelido, data_nascimento, telemovel, morada, codigo_postal, localidade, nif FROM user";

$array_utilizadores = array();

if (mysqli_stmt_prepare($stmt, $query)) {
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $id_user, $ref_roles_codigo, $email, $password, $nome, $apelido, $data_nascimento, $telemovel, $morada, $codigo_postal, $localidade, $nif); ?>
        <!-- DROPDOWN COM TODOS OS UTILIZADORES -->
        <div class="col-lg-6 col-6 " id="admin">
            <h3 class="account__title">Painel de Administrador<span class="h6 font-weight-light"> Gestão de utilizadores
                </span></h3>
            <div class="my__account__wrapper account__form">


                <form class="" action="my_acc.php#aaa" method="post">
                    <div class="form-group ">
                        <select class="form-control" id="userChoice" name="userescolhido" onchange="this.form.submit();">
                            <option value="0">Selecione o Utilizador</option>
                            <?php
                            while (mysqli_stmt_fetch($stmt)) {
                                //Armazenar todos os utilizadores e seus dados num array para usar a seguir
                                $array_utilizadores[$id_user] = array('email' => $email, 'role' => $ref_roles_codigo);

                                //verificar qual foi o utilizador que foi escolhido e selecioná-lo à partida
                                if (isset($id_escolhido) &&  $id_escolhido == $id_user) {
                                    echo '<option selected value="' . $id_user . '">' . $email . '</option>';
                                } else {
                                    echo '<option  value="' . $id_user . '">' . $email . '</option>';
                                }
                            }; ?>
                        </select>
                    </div>
                </form>
        <?php
        mysqli_stmt_close($stmt);
        mysqli_close($link);
    } else {
        // Acção de erro
        echo "Error:" . mysqli_stmt_error($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($link);
    }
}

        ?>
        <!-- /DROPDOWN COM TODOS OS UTILIZADORES-->
        <!-- mostrar formulário para alterar valores -->
        <?php
        $link = new_db_connection();

        $stmt = mysqli_stmt_init($link);

        $query = "SELECT codigo,  codigo_descricao FROM roles";


        if (mysqli_stmt_prepare($stmt, $query)) {
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $codigo, $codigo_descricao);
                if (isset($id_escolhido) && $id_escolhido != 0) {
                    $_SESSION['id_user_escolhido'] = $id_escolhido;
        ?>

                    <!-- MOSTRA O EMAIL E O ROLL DO USER SELECIONADO EM CIMA ATRAVÉS DO ARRAY -->
                    <form class="row" role="form" action="scripts/sc_alterar_info_admin.php" method="post">
                        <div class=" container">
                            <div class="input__box row">
                                <span class="col-6">Email</span>
                                <span class="col-6">Cargo</span>
                            </div>
                            <div class="input__box row">
                                <input class="form-control col-5 ml-1" name="email_novo" type="email" required="required" value="<?= $array_utilizadores[$id_escolhido]['email'] ?>">
                                <span class="col-1"></span>
                                <select class="col-2 ml-1 form-control" id="roleChoice" name="role_novo" ;">

                                    <?php

                                    while (mysqli_stmt_fetch($stmt)) {
                                        if ($array_utilizadores[$id_escolhido]['role'] == $codigo) {
                                            echo '<option selected value="' . $codigo . '">' . $codigo_descricao . '</option>';
                                        } else {
                                            echo '<option value="' . $codigo . '">' . $codigo_descricao . '</option>';
                                        }
                                    };
                                    ?>
                                </select>
                                <span class="col-1"></span>
                                <div class="form__btn col-3 mt-3 p-0">
                                    <button data-toggle="modal" data-target="#verfPassADMIN">Guardar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div id="verfPassADMIN" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="account__form">
                                            <div class="input__box">
                                                <label class=" form-control-label">Password</label>
                                                <input name="pass" type="password" required="required" value="">

                                                <div class="form__btn row mt-3 ">
                                                    <button data-dismiss="modal" class="col-4 text-danger" data-dismiss=" modal">Cancelar</button>
                                                    <span class="col-4"></span>
                                                    <button class="col-4 " type="submit">Continuar</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
        <?php
                    mysqli_stmt_close($stmt);
                    mysqli_close($link);
                }
            }
        }

        ?>
        <?php
        $link = new_db_connection();

        $stmt = mysqli_stmt_init($link);

        $query = "SELECT idmarca, nome FROM marca";



        if (mysqli_stmt_prepare($stmt, $query)) {
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $idmarca, $nomeMarca); ?>

            </div>
            <h5 class="account__title">Adicionar Produto
                <span class="h6 font-weight-light"> Administrador</span>
            </h5>
            <div class="my__account__wrapper account__form">
                <form class="row" role="form" action="scripts/sc_add_product_admin.php" method="post" enctype="multipart/form-data">
                    <div class=" container">
                        <div></div>

                        <p>
                            <label class=" form-control-label">Marca</label>
                            <select name="marca" id="marca">
                                <option value="">Escolha uma marca</option>
                        <?php
                        while (mysqli_stmt_fetch($stmt)) {
                            echo '<option value="' . $idmarca . '">' . $nomeMarca . '</option>';
                        };
                    }
                }
                mysqli_stmt_close($stmt);
                mysqli_close($link);
                        ?>

                            </select>

                        </p>
                        <p class="col-5">
                            <p><label class=" form-control-label">Nome</label></p>
                            <input type="text" name="nome">
                        </p>
                        <p class="col-5">
                            <p><label class=" form-control-label">Preco</label><span></span></p>
                            <input placeholder="000.00" type="text" name="preco">
                        </p>
                        <p class="col-5">
                            <p><label class=" form-control-label">Ano</label></p>
                            <input placeholder="1901 - 2155" type="number" name="ano">
                        </p>
                        <p>
                            <p><label class=" form-control-label">Descrição breve</label></p>
                            <textarea name="dsc_short" id="dsc_short" rows="4" cols="50"></textarea>
                        </p>
                        <p>
                            <p><label class=" form-control-label">Descrição Detalhada</label></p>
                            <textarea name="dsc_long" id="dsc_long" rows="4" cols="50"></textarea>
                        </p>
                        <p>
                            <p><label class=" form-control-label">Cor</label></p>
                            <input type="text" name="cor">
                        </p>
                        <p>
                            <p><label class=" form-control-label">Aroma</label></p>
                            <input type="text" name="aroma">
                        </p>
                        <p>
                            <p><label class=" form-control-label">Sabor</label></p>
                            <input type="text" name="sabor">
                        </p>
                        <p>
                            <p><label class=" form-control-label">Teor alcoólico</label></p>
                            <input placeholder="00.0" step="0.1" type="number" name="teor_alcool">
                        </p>
                        <p>
                            <label class=" form-control-label">Acidez Total</label></p>
                        <input placeholder="0.00" step="0.01" type="number" name="acidez">
                        </p>
                        <p>
                            <p><label class=" form-control-label">Acidez Volátil</label></p>
                            <input placeholder="00.00" step="0.01" type="number" name="acidez_vol">
                        </p>
                        <p>
                            <p><label class=" form-control-label">pH</label></p>
                            <input placeholder="00.00" step="0.01" type="number" name="pH">
                        </p>
                        <p>
                            <p><label class=" form-control-label">Extrato Seco</label></p>
                            <input placeholder="00.00" step="0.01" type="number" name="extrato_seco">
                        </p>
                        <p>
                            <p><label class=" form-control-label">Conservação</label></p>
                            <input type="text" name="conservacao">
                        </p>
                        <p>
                            <p><label class=" form-control-label">Serviço</label></p>
                            <input type="text" name="servico">
                        </p>
                        <p>
                            <p><label class=" form-control-label">Desfrutar</label></p>
                            <input type="text" name="desfrutar">
                        </p>
                        <p>
                            <p><label class=" form-control-label">Castas</label></p>
                            <input type="text" name="castas">
                        </p>
                        <p>
                            <p><label class=" form-control-label">Vinha</label></p>
                            <input type="text" name="vinha">
                        </p>
                        <p>
                            <p><label class=" form-control-label">Seleciona a imagem</label></p>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </p>

                        <div class="form__btn mt-3 ">
                            <button class="" name="submit" type="submit">Inserir</button>
                        </div>

                    </div>

                </form>


            </div>
        </div>