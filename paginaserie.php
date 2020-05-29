<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require_once "helpers/hp_head.php";
    ?>

    <title>Bloop | </title>


</head>




<body>

    <!--NAV-->
    <?php
    require_once "components/cp_nav.php";
    ?>
    <!--/NAV-->


    <main class="alturaMain text-white bg-30 d-flex flex-column align-items-start">
        <article class="container-fluid p-0 mb-5">
            <div id="back4" class="imgSeriesBreaking mt-0">
                <section class="row m-0 pt-4 pb-4 fade">
                    <span class="col-2"></span>

                    <div class="col-8 align-self-center pl-0 pr-0">
                        <p class="m-0 h1 text-center">Tv Show</p>
                    </div>


                </section>

                <div class="container-fluid alturaCategorias backgroundCategorias">
                    <div class="row pb-2 w-50 mx-auto">
                        <p class="col-12 m-0 text-center font-weight-bold" style="background-image: linear-gradient(to right, rgba(0,0,0,0),rgba(234,178,0,0.7),rgba(0,0,0,0)); color: black">Featured:</p>
                    </div>
                    <div class="row pb-2">
                        <h3 class="col-12 m-0 text-center font-weight-bold" style="font-size: 3rem">Breaking Bad</h3>
                    </div>
                    <div class="row pb-2">
                        <p class="col-12 m-0 text-center">2008</p>
                    </div>
                    <div class="row pb-2 mb-5">
                        <div class="col-3 text-center pr-0">
                            <p class="m-0">Drama</p>
                        </div>
                        <div class="col-1">
                            <p>&bull;</p>
                        </div>
                        <div class="col-4 p-0 text-center">
                            <p class="m-0">Crime</p>
                        </div>
                        <div class="col-1">
                            <p>&bull;</p>
                        </div>
                        <div class="col-3 text-center pl-0">
                            <p class="m-0">Thriller</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-10 mx-auto">
                <p>Mild-mannered high school chemistry teacher Walter White thinks his life can't get much worse. His salary barely makes ends meet, a situation not likely to improve once his pregnant wife gives birth, and their teenage son is battling cerebral palsy. But Walter is dumbstruck when he learns he has terminal cancer. Realizing that his illness probably will ruin his family financially, Walter makes a desperate bid to earn as much money as he can in the time he has left by turning an old RV into a meth lab on wheels.</p>

            </div>

            <div class="tile m-0 w-100" id="tile-1">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <div class="slider1"></div>
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Season 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Season 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Season 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">Season 4</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content scrollSeason">
                    <div class="tab-pane show active pt-0 linksCategorias" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <a href="playerBreakingBad.html">
                            <div class="row mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 1 <span class="text-dourado">&bull;</span> Pilot</p>
                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.9</p>
                                </div>
                            </div>
                        </a>
                        <a href="playerBreakingBad.html">
                            <div class="row mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 2 <span class="text-dourado">&bull;</span> Cat's in the bag...</p>
                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.7</p>
                                </div>
                            </div>
                        </a>
                        <a href="playerBreakingBad.html">
                            <div class="row mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 3 <span class="text-dourado">&bull;</span> ...And the Bag's in the River</p>
                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.7</p>
                                </div>
                            </div>
                        </a>
                        <a href="playerBreakingBad.html">
                            <div class="row mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 4 <span class="text-dourado">&bull;</span> Cancer Man</p>
                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.2</p>
                                </div>
                            </div>
                        </a>






                    </div>
                    <div class="tab-pane pt-0 linksCategorias" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <a href="playerBreakingBad.html">
                            <div class="row mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 1 <span class="text-dourado">&bull;</span> Seven Thirty-Seven</p>
                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.7</p>
                                </div>
                            </div>
                        </a>
                        <a href="playerBreakingBad.html">
                            <div class="row mt-2 mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 2 <span class="text-dourado">&bull;</span> Grilled</p>

                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 9.2 </p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="tab-pane pt-0 linksCategorias" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <a href="playerBreakingBad.html">
                            <div class="row mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 1 <span class="text-dourado">&bull;</span> No Más</p>

                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.6</p>
                                </div>
                            </div>
                        </a>
                        <a href="playerBreakingBad.html">
                            <div class="row mt-2 mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 2 <span class="text-dourado">&bull;</span> Caballo sin Nombre</p>

                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.7 </p>
                                </div>
                            </div>
                        </a>
                        <a href="playerBreakingBad.html">
                            <div class="row mt-2 mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 3 <span class="text-dourado">&bull;</span> I.F.T</p>

                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.4</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="tab-pane pt-0 linksCategorias" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                        <a href="playerBreakingBad.html">
                            <div class="row mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 1 <span class="text-dourado">&bull;</span> Box Cutter</p>

                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 9.1</p>
                                </div>
                            </div>
                        </a>
                        <a href="playerBreakingBad.html">
                            <div class="row mt-2 mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 2 <span class="text-dourado">&bull;</span> Thirty-Eight Snub</p>

                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.2</p>
                                </div>
                            </div>
                        </a>
                        <a href="playerBreakingBad.html">
                            <div class="row mt-2 mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 3 <span class="text-dourado">&bull;</span> Open House</p>

                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 7.9 </p>
                                </div>
                            </div>
                        </a>
                        <a href="playerBreakingBad.html">
                            <div class="row mb-2 bg-preto">
                                <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/series/breakingbad/preview.jpg"></div>
                                <div class="col-8 d-flex align-items-start justify-content-center flex-column">
                                    <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Episode 4 <span class="text-dourado">&bull;</span> Bullet Points</p>

                                    <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.7</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

            </div>


        </article>

        <?php
        require_once "components/cp_footer.php"
        ?>
    </main>



    <article class="navBotttom container-fluid fixed-bottom navbar navbar-dark bg-preto justify-content-center">
        <div class="row w-100 pt-2 pb-2 text-center">

            <div class="col-4 p-0">
                <a href="myaccount.html"><img class="userLogo" src="Imagens/user_branco.png" alt=""></a>
            </div>

            <div class="col-4 p-0">
                <a href="index.html"><i class="fas fa-home fa-2x" style="color:white"></i></a>
            </div>

            <div class="col-4 p-0">
                <a href="search.html"><i class="fas fa-search fa-2x" style="color:white"></i></a>
            </div>
        </div>
    </article>

    <?php
    require_once "helpers/hp_js.php"
    ?>






</body>

</html>