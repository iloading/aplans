<main class="alturaMainLogin text-white bg-index d-flex flex-column align-items-center">
    <article class="container-fluid d-flex p-0 mainCentro landingCentro">
        <div class="w-100">


            <div class="container-fluid w-100 bg-index">
                <div class="w-100">
                    <div class="card animated bounceInDown myForm w-100 bg-index borderNone">
                        <div class="text-center mb-4">
                            <img class="div-logo-landingPage div-logo-landingPage-img" src="assets/aplansazul.png">

                        </div>


                        <div class="card-header bg-index borderNone">
                            <ul class="nav nav-tabs row navModal m-0" role="tablist">
                                <li class=" mb-1 col-6 text-center" role="presentation"><a class="tabsTexto loginTit" href="#loginTab" aria-controls="loginTab" role="tab" data-toggle="tab">Login</a>

                                </li>

                                <li class=" mb-1 col-6 text-center" role="presentation" class="active"><a class="tabsTexto loginTit" href="#registerTab" aria-controls="registerTab" role="tab" data-toggle="tab">Sign Up</a>

                                </li>

                            </ul>
                        </div>
                        <!-- MENSAGENS DE VALIDAÇÃO -->
                        <?php

                        if (isset($_GET["msg"])) {

                            switch ($_GET["msg"]) {
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
                        <!-- /MENSAGENS DE VALIDAÇÃO -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane container-fluid p-0" id="registerTab">
                                    <form action="scripts/sc_register.php" method="post" id="registo">
                                        <div id="dynamic_container">
                                            <div class="input-group">
                                                <input name="nome" type="text" placeholder="Name" class="form-control"  />
                                            </div>
                                            <div class="input-group mt-3">
                                                <input name="email" type="email" placeholder="Email" class="form-control" />

                                            </div>
                                            <div class="input-group mt-3">
                                                <input name="password" type="password" placeholder="Password" class="form-control"  />

                                            </div>
                                            <div class="input-group mt-3">
                                                <input name="password_confirmar" type="password" placeholder="Confirm Password" class="form-control" />

                                            </div>
                                        </div>


                                        <div class="card-footer p-0 pt-3 borderNone bg-index w-100">
                                            <a class="btn btn-secondary btn-sm submit_btn add-event m-0" id="add_more">+</a>
                                            <a class="btn btn-secondary btn-sm submit_btn add-event m-0" id="remove_more">-</a>
                                        </div>

                                        <div class="mt-3">
                                            <button type="submit" value="Submit" class="btn btn-success btn-sm float-right submit_btn w-100">Sign Up</button>
                                        </div>
                                    </form>
                                </div>


                                <div role="tabpanel" class="tab-pane active container-fluid p-0" id="loginTab">
                                    <form action="scripts/sc_login.php" method="post" id="login">
                                        <div id="dynamic_container">

                                            <div class="input-group mt-3">

                                                <input type="text" name="email" placeholder="Email Adress" class="form-control" required />
                                            </div>
                                            <div class="input-group mt-3">

                                                <input type="password" name="password" placeholder="Password" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" value="Submit" class="btn btn-success btn-sm float-right submit_btn w-100">Login</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="text-center">
                <p style="color: #3C5E77" class="mb-0">You are completely safe.</p>
                <p style="color: #BAE4AC;">Read our Terms & Conditions</p>
            </div>
        </div>

    </article>


</main>