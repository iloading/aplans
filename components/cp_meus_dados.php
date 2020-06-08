<?php
$id =$_SESSION['id_user_iloading'];

$link = new_db_connection();

$stmt = mysqli_stmt_init($link);

$query = "SELECT id, ref_roles_codigo, email, password, nome, apelido, data_nascimento, telemovel, morada, codigo_postal, localidade, nif FROM user WHERE id = ?";

if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id);

    if (mysqli_stmt_execute($stmt)) {

        mysqli_stmt_bind_result($stmt, $id, $ref_roles_codigo, $email, $password, $nome, $apelido, $data_nascimento, $telemovel, $morada, $codigo_postal, $localidade, $nif);

        mysqli_stmt_fetch($stmt);


        mysqli_stmt_close($stmt);
        mysqli_close($link);
    } else {
        // Acção de erro
        echo "Error:" . mysqli_stmt_error($stmt);
    }
} else {
    // Acção de erro
    echo "Error:" . mysqli_error($link);
    mysqli_close($link);
}
?>


<div class="col-lg-6 col-6 " id="login1">
    <div class="my__account__wrapper">
        <h3 class="account__title">Os meus dados</h3>
        
        <form role="form" action="scripts/sc_alterar_info_user.php" method="post">
            <div class="account__form">
                <div class="input__box">
                    <label class=" form-control-label">Nome</label>
                    <input name="nomeNovo" type="text" required="required" value="<?= $nome ?>">
                    <label class=" form-control-label">Apelido</label>
                    <input name="apelidoNovo" type="text" required="required" value="<?= $apelido ?>">
                    <label class=" form-control-label">Telemóvel</label>
                    <input name="telemovelNovo" type="number" required="required" value="<?= $telemovel ?>">
                    <label class=" form-control-label">Morada</label>
                    <input name="moradaNovo" type="text" required="required" value="<?= $morada ?>">
                    <label class=" form-control-label">Localidade</label>
                    <input name="localidadeNovo" type="text" required="required" value="<?= $localidade ?>">
                    <label class=" form-control-label">NIF</label>
                    <input name="nifNovo" type="number" required="required" value="<?= $nif ?>">

                </div>

                <div class="form__btn">
                    <button data-toggle="modal" data-target="#myModal">Guardar</button>
                </div>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
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
                            <div class="modal-footer">

                            </div>
                        </div>

                    </div>
                </div>



                <!-- <a class="forget_pass" href="#">Lost your password?</a> -->
            </div>
        </form>
    </div>
</div>