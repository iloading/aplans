<!DOCTYPE html>
<html lang="en">

<head>

<?php
  require_once "helpers/hp_head.php";
?>

  <title>Bloop</title>


</head>




<body>

    <!--NAV-->
    <?php
    require_once "components/cp_nav.php";
    ?>
    <!--/NAV-->



    <main id="main" class="alturaMain text-white bg-30 d-flex flex-column align-items-start">
        <article class="container-fluid alturaIndex p-0">
            <div class="row m-0 carousel">
                <div class="col-md-12 p-0">
                    <div id="carouselMain" class="carousel slide " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselMain" data-slide-to="0" class="active"> </li>
                            <li data-target="#carouselMain" data-slide-to="1"></li>
                            <li data-target="#carouselMain" data-slide-to="2"></li>
                            <li data-target="#carouselMain" data-slide-to="3"></li>
                            <li data-target="#carouselMain" data-slide-to="4"></li>
                        </ol>

                        <div class="carousel-inner pointer" role="listbox">
                            <div onclick="window.location.href='playerArrival.php'" class="carousel-item active">
                                <img class="" src="assets/carrosel/primeiro/carrousel1.jpg" alt=""
                                    data-color="lightblue">
                                <div class="carousel-caption d-inline tituloMovie">
                                    <h5 class="pb-2">Arrival</h5>
                                </div>
                            </div>
                            <div onclick="window.location.href='playerInterstellar.php'" class="carousel-item">
                                <img class="" src="assets/carrosel/primeiro/carrousel2.jpg" alt=""
                                    data-color="lightblue">
                                <div class="carousel-caption d-md-block tituloMovie">
                                    <h5 class="pb-2">Interstellar</h5>
                                </div>
                            </div>
                            <div onclick="window.location.href='playerLalaland.php'"
                                class="carousel-item full-screenTop">
                                <img class="" src="assets/carrosel/primeiro/carrousel6.jpg" alt=""
                                    data-color="lightblue">
                                <div class="carousel-caption d-md-block tituloMovie">
                                    <h5 class="pb-2">La La Land</h5>
                                </div>
                            </div>
                            <div onclick="window.location.href='playerGodfather.php'" class="carousel-item">
                                <img class="" src="assets/carrosel/primeiro/carrousel4.png" alt=""
                                    data-color="lightblue">
                                <div class="carousel-caption d-md-block tituloMovie">
                                    <h5 class="pb-2">The Godfather</h5>
                                </div>
                            </div>
                            <div onclick="window.location.href='playerAvengers.php'"
                                class="carousel-item full-screenTop">
                                <img class="" src="assets/carrosel/primeiro/carrousel5.jpg" alt=""
                                    data-color="lightblue">
                                <div class="carousel-caption d-none d-md-block tituloMovie">
                                    <h5 class="pb-2">Avengers: Endgame</h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Controls-->

                <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

                <div class="col-12 tituloHot p-2">
                    <p class="m-0">HOT</p>
                    <p class="paragrafoHot m-0">Popular Movies In The Moment<p>
                </div>

            </div>
            <div class="row m-0 top-content">
                <iframe src="carousel2.php" width="100%" height="100%" scrolling"no" frameborder="0">
                    <style>
                    iframe::-webkit-scrollbar {
                        display: none;
                    }
                    </style>
                    <div class="container-fluid">
                        <div id="carousel-example" class="carousel slide slide1" data-ride="carousel">
                            <div class="carousel-inner carousel-inner1 row w-100 mx-auto" role="listbox">
                                <div class="carousel-item carousel-item1 col-12 col-sm-6 col-md-4 col-lg-3 active">
                                    <img src="Imagens/main1.jpg" class="img-fluid mx-auto d-block" alt="img1">
                                </div>
                                <div class="carousel-item carousel-item1 col-12 col-sm-6 col-md-4 col-lg-3">
                                    <img src="Imagens/main2.jpg" class="img-fluid mx-auto d-block" alt="img2">
                                </div>
                                <div class="carousel-item carousel-item1 col-12 col-sm-6 col-md-4 col-lg-3">
                                    <img src="Imagens/main3.jpg" class="img-fluid mx-auto d-block" alt="img3">
                                </div>
                                <div class="carousel-item carousel-item1 col-12 col-sm-6 col-md-4 col-lg-3">
                                    <img src="Imagens/main4.jpg" class="img-fluid mx-auto d-block" alt="img4">
                                </div>
                                <div class="carousel-item carousel-item1 col-12 col-sm-6 col-md-4 col-lg-3">
                                    <img src="Imagens/main5.jpg" class="img-fluid mx-auto d-block" alt="img5">
                                </div>
                                <div class="carousel-item carousel-item1 col-12 col-sm-6 col-md-4 col-lg-3">
                                    <img src="Imagens/main4.jpg" class="img-fluid mx-auto d-block" alt="img6">
                                </div>
                                <div class="carousel-item carousel-item1 col-12 col-sm-6 col-md-4 col-lg-3">
                                    <img src="Imagens/main3.jpg" class="img-fluid mx-auto d-block" alt="img7">
                                </div>
                                <div class="carousel-item carousel-item1 col-12 col-sm-6 col-md-4 col-lg-3">
                                    <img src="Imagens/main2.jpg" class="img-fluid mx-auto d-block" alt="img8">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </iframe>
            </div>

        </article>


        <article class="">

            <div class="container-fluid mt-auto mt-lg-4">
                <div class="row">

                    <div class="card-deck m-2">
                        <div class="card bg-preto">
                            <img class="card-img-top" src="assets/cards/card1.jpg" alt="Card image cap">
                            <div class="row pb-2 w-100 mx-auto">
                                <p class="col-12 m-0 text-center font-weight-bold"
                                    style="background-image: linear-gradient(to right, rgba(0,0,0,0),rgba(234,178,0,0.7),rgba(0,0,0,0)); color: black">
                                    Coming soon</p>
                            </div>
                            <div class="card-block p-3 container-fluid">
                                <h4 class="card-title text-dourado">Toy Story 4</h4>
                                <p class="card-text text-white">Woody, Buzz Lightyear and the rest of the gang embark on
                                    a trip with Bonnie and a new toy called Forky.</p>
                            </div>

                            <div class="container-fluid p-0">
                                <button onclick="window.location.href='https://disney.pt/filmes/toy-story-4'"
                                    class="mt medium diagonal ml-3 mb-3 pr-2 pl-2">
                                    Learn More
                                </button>
                            </div>

                        </div>



                        <div class="card bg-preto">
                            <img class="card-img-top" src="assets/cards/card2.jpeg" alt="Card image cap">
                            <div class="row pb-2 w-100 mx-auto">
                                <p class="col-12 m-0 text-center font-weight-bold"
                                    style="background-image: linear-gradient(to right, rgba(0,0,0,0),rgba(234,178,0,0.7),rgba(0,0,0,0)); color: black">
                                    News</p>
                            </div>
                            <div class="card-block p-3 container-fluid">
                                <h4 class="card-title text-dourado">The Lion King</h4>
                                <p class="card-text text-white">Why Directing James Earl Jones On The Lion King Was
                                    'Intimidating' For Jon Favreau</p>
                            </div>
                            <div class="container-fluid p-0">
                                <button
                                    onclick="window.location.href='https://www.cinemablend.com/news/2475521/why-directing-james-earl-jones-on-the-lion-king-was-intimidating-for-jon-favreau'"
                                    class="mt medium diagonal ml-3 mb-3 pr-2 pl-2">
                                    Learn More
                                </button>
                            </div>
                        </div>



                        <div class="card bg-preto">
                            <img class="card-img-top" src="assets/cards/card3.jpg" alt="Card image cap">
                            <div class="row pb-2 w-100 mx-auto">
                                <p class="col-12 m-0 text-center font-weight-bold"
                                    style="background-image: linear-gradient(to right, rgba(0,0,0,0),rgba(234,178,0,0.7),rgba(0,0,0,0)); color: black">
                                    History</p>
                            </div>
                            <div class="card-block p-3 container-fluid">
                                <h4 class="card-title text-dourado">Cinema History</h4>
                                <p class="card-text text-white">Learn about the history and development of cinema, from
                                    the Kinetoscope in 1891 to today’s 3D revival.</p>
                            </div>
                            <div class="container-fluid p-0">
                                <button
                                    onclick="window.location.href='https://blog.scienceandmediamuseum.org.uk/very-short-history-of-cinema/'"
                                    class="mt medium diagonal ml-3 mb-3 pr-2 pl-2">
                                    Learn More
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </article>

        <footer class="mt-auto w-100">
            <div class="container-fluid text-center p-0 pt-4 justify-content-center">
                <div class="row mx-auto w-75">
                    <a class="col-4" href="about.php">
                        <p class="m-0">About</p>
                    </a>
                    <a class="col-4" href="https://media.makeameme.org/created/legal.jpg">
                        <p class="m-0">Legal</p>
                    </a>
                    <a class="col-4" href="http://images3.memedroid.com/images/UPLOADED237/5a0dcfe4593e3.jpeg">
                        <p class="m-0">Privacy</p>
                    </a>
                </div>
                <div class="row mx-auto w-75">
                    <a class="col-4" href="https://i.kym-cdn.com/photos/images/original/000/182/580/375.png">
                        <p class="mt-2">Jobs</p>
                    </a>
                    <a class="col-4" href="https://www.delish.com/cooking/g1956/best-cookies/">
                        <p class="mt-2">Cookies</p>
                    </a>
                    <a class="col-4" href="terms.php">
                        <p class="mt-2">Terms of Use</p>
                    </a>
                </div>

                <div
                    class="row d-flex align-items-center p-2 w-100 mx-auto border border-right-0 border-left-0 border-bottom-0">
                    <p class="followapps col-lg-6 m-0 text-right">Follow us</p>
                    <section class="text-left col-lg-6 p-2 p-sm-0 Footericons">
                        <a target="_blank"
                            href="https://www.facebook.com/memesdabola/photos/a.353545807997538/2481570548528376/?type=3&theater">
                            <img class="img-fluid footerSocials ml-2" src="Imagens/Footer icons/facebook_login.png"
                                alt=""></a>
                        <a target="_blank" href="https://twitter.com/MemesCentraI/status/1132355247169519616"><img
                                class="img-fluid footerSocials ml-2" src="Imagens/Footer icons/twitter_login.png"
                                alt=""></a>
                        <a target="_blank" href="https://www.instagram.com/p/BxsEkDglPK-/"><img
                                class="img-fluid footerSocials ml-2" src="Imagens//Footer icons/instagram_login.png"
                                alt=""></a>
                        <a target="_blank" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img
                                class="img-fluid footerSocials ml-2" src="Imagens//Footer icons/youtube_login.png"
                                alt=""></a>
                    </section>
                </div>

                <div class="text-center">
                    <p class="m-0 p-1">&#169; 2019 bloop, a DR, JM, MF &amp; SS project</p>
                </div>
            </div>
        </footer>

    </main>



    <article class="navBotttom container-fluid fixed-bottom navbar navbar-dark bg-preto justify-content-center">
        <div class="row w-100 pt-2 pb-2 text-center">

            <div class="col-4 p-0">
                <a href="myaccount.php"><img class="userLogo" src="Imagens/user_branco.png" alt=""></a>
            </div>

            <div class="col-4 p-0">
                <a href="index.php"><i class="fas fa-home fa-2x" style="color:white"></i></a>
            </div>

            <div class="col-4 p-0">
                <a href="search.php"><i class="fas fa-search fa-2x" style="color:white"></i></a>
            </div>
        </div>
    </article>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/codigo.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>






</body>

</html>