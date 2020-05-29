<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="mobile-web-app-capable" content="yes">
    <title>Bloop</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!--Fonte-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--FavIcon-->
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/favIcon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favIcon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favIcon/favicon-16x16.png">
    <link rel="manifest" href="imagens/favIcon/site.webmanifest">
    <link rel="mask-icon" href="imagens/favIcon/safari-pinned-tab.svg" color="#eab200">
    <meta name="apple-mobile-web-app-title" content="Bloop">
    <meta name="application-name" content="Bloop">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#eab200">







</head>




<body style="background-color: #1A1A1A; overflow-x: hidden;">

    <main class="alturaMainLogin text-white bg-preto d-flex flex-column align-items-center">
        <article class="container-fluid d-flex p-0 mainCentro landingCentro">
            <div class="w-100">


                <div class="container-fluid w-100 bg-preto">
                    <div class="w-100">
                        <div class="card animated bounceInDown myForm w-100 bg-30 borderNone">
                            <div class="text-center mb-4">
                                <img src="imagens/logo/logo.png" width="300" height="225">

                                <p class="pt-2"><span style="color: #eab200">Streaming</span> made simple</p>
                            </div>


                            <div class="card-header bg-preto borderNone">
                                <ul class="nav nav-tabs row navModal m-0" role="tablist">
                                    <li class=" mb-1 col-6 text-center" role="presentation"><a class="tabsTexto loginTit" href="#loginTab" aria-controls="loginTab" role="tab" data-toggle="tab">Login</a>

                                    </li>

                                    <li class=" mb-1 col-6 text-center" role="presentation" class="active"><a class="tabsTexto loginTit" href="#registerTab" aria-controls="registerTab" role="tab" data-toggle="tab">Register</a>

                                    </li>

                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane container-fluid p-0" id="registerTab">
                                        <form action="index.html" method="get" id="form1">
                                            <div id="dynamic_container">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text br-15"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" placeholder="Username" class="form-control" required />
                                                </div>
                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text br-15"><i class="fas fa-lock"></i></span>
                                                    </div>
                                                    <input type="password" placeholder="Password" class="form-control" required />
                                                </div>
                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text br-15"><i class="fas fa-at"></i></span>
                                                    </div>
                                                    <input type="email" placeholder="Email" class="form-control" required />
                                                </div>
                                            </div>

                                        </form>
                                        <div class="card-footer pl-0 borderNone bg-preto">
                                            <a class="btn btn-secondary btn-sm" id="add_more"><i class="fas fa-plus-circle"></i> Add extra details</a>
                                            <a class="btn btn-secondary btn-sm" id="remove_more"><i class="fas fa-trash-alt"></i> Remove</a>
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" form="form1" value="Submit" class="btn btn-success btn-sm float-right submit_btn"><i class="fas fa-arrow-alt-circle-right"></i> Submit</button>
                                        </div>
                                    </div>


                                    <div role="tabpanel" class="tab-pane active container-fluid p-0" id="loginTab">
                                        <form action="index.html" method="get" id="form2">
                                            <div id="dynamic_container">

                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text br-15"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" placeholder="Username" class="form-control" required />
                                                </div>
                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text br-15"><i class="fas fa-lock"></i></span>
                                                    </div>
                                                    <input type="password" placeholder="Password" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <button type="submit" form="form2" value="Submit" class="btn btn-success btn-sm float-right submit_btn"><i class="fas fa-arrow-alt-circle-right"></i> Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </article>


    </main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/codigo.js"></script>






</body></html>
