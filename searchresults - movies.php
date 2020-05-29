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
    <article class="container-fluid p-0 mainCentro mb-5">
      <div class="inputSearch">

        <input type="text" name="search" placeholder="Movies" class="bg-30 text-white p-2 mt-4 ml-2">

        <button type="button" class="btn" data-toggle="modal" data-target="#basicExampleModal">
          <i class="fas fa-sliders-h text-white"></i>
        </button>

        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-preto">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close text-dourado" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body container-fluid">
                <div class="row m-2">
                  <p class="col-6 mb-0 d-flex align-items-center" style="border-bottom: 1px solid white">Date</p>
                  <div class="col-6 d-flex align-items-center justify-content-end">
                    <select class="mdb-select md-form">
                      <option value="" disabled selected>Default</option>
                      <option value="1">Old</option>
                      <option value="2">Today</option>
                      <option value="3">New</option>
                    </select>
                  </div>
                </div>

                <div class="row m-2">
                  <p class="col-6 mb-0 d-flex align-items-center" style="border-bottom: 1px solid white">Quality</p>
                  <div class="col-6 d-flex align-items-center justify-content-end">
                    <select class="mdb-select md-form">
                      <option value="" disabled selected>Default</option>
                      <option value="1">480p</option>
                      <option value="2">720p</option>
                      <option value="3">1080p</option>
                    </select>
                  </div>
                </div>

                <div class="row m-2">
                  <p class="col-6 mb-0 d-flex align-items-center" style="border-bottom: 1px solid white">Type</p>
                  <div class="col-6 d-flex align-items-center justify-content-end">
                    <select class="mdb-select md-form">
                      <option value="" disabled selected>Default</option>
                      <option value="1">Movies</option>
                      <option value="2">Shows</option>
                    </select>
                  </div>
                </div>



              </div>
              <div class="modal-footer">

                <button type="button" class="btn bg-black text-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn bg-30" data-dismiss="modal" style="color: #eab200">Save changes</button>


              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid mt-5 linksCategorias">
        <a href="playerKillBill.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/action/killbill/thumbv2.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Kill Bill<span class="text-dourado">&bull;</span> 2003</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Quentin Tarantino</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Brie Larson, Miguel Filipe, Sean Bridgers, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.1</p>
            </div>
          </div>
        </a>

        <a href="playerPulpFiction.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/drama/pulpfiction/thumb1v2.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Pulp Fiction <span class="text-dourado">&bull;</span> 2008</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Quentin Tarantino </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : John Travolta, Maria Medeiros, Samuel Santos, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.9 </p>
            </div>
          </div>
        </a>
        <a href="playerArrival.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultsmovies/search1.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Arrival <span class="text-dourado">&bull;</span> 2016</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Denis Villeneuve </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Amy Adams, Jeremy, Forest Whitaker, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 7.9 </p>
            </div>
          </div>
        </a>
        <a href="playerInterstellar.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultsmovies/search6.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Interstellar <span class="text-dourado">&bull;</span> 2014</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Christopher Nolan </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Matthew McConaughey, Anne Hathaway, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.7 </p>
            </div>
          </div>
        </a>
        <a href="EE/Building2.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultsmovies/search2.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Kimi no na wa <span class="text-dourado">&bull;</span> 2016</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Makoto Shinkai </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Ryuunosuke Kaminki, Mone Narita, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.5 </p>
            </div>
          </div>
        </a>
        <a href="EE/Building2.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultsmovies/search3.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Inception <span class="text-dourado">&bull;</span> 2010</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Christopher Nolan </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Leonardo DiCaprio, Ellen Page, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.8 </p>
            </div>
          </div>
        </a>
        <a href="EE/Building2.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultsmovies/search4.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">Nocturnal Animals <span class="text-dourado">&bull;</span> 2016</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Tom Ford </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Amy Adams, Jake Gyllenhaal, Michael Shannon, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 7.7 </p>
            </div>
          </div>
        </a>
        <a href="EE/Building2.html">
          <div class="row mt-2 mb-2 bg-preto">
            <div class="col-4 p-0"><img class="tamanhoImagem" src="imagens/categorias/searchresultsmovies/search5.jpg"></div>
            <div class="col-8 d-flex align-items-start justify-content-center flex-column" style="font-size: 1rem;">
              <p class="m-0 font-weight-bold mobileCategoriasTit" style="font-size: 2rem">The Truman Show <span class="text-dourado">&bull;</span> 1998</p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Director</span> : Peter Weir </p>
              <p class="m-0 mobileCategorias"><span class="font-weight-bold text-dourado">Cast</span> : Jim Carrey, Ed Harris, Noah Linney, etc...</p>
              <p class="m-0 mobileCategoriasTit"><i class="far fa-star text-dourado"></i> 8.1 </p>
            </div>
          </div>
        </a>

      </div>


    </article>

    <footer class="mt-auto w-100">
      <div class="container-fluid text-center p-0 pt-4 justify-content-center">
        <div class="row mx-auto w-75">
          <a class="col-4" href="about.html">
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
          <a class="col-4" href="terms.html">
            <p class="mt-2">Terms of Use</p>
          </a>
        </div>

        <div class="row d-flex align-items-center p-2 w-100 mx-auto border border-right-0 border-left-0 border-bottom-0">
          <p class="followapps col-lg-6 m-0 text-right">Follow us</p>
          <section class="text-left col-lg-6 p-2 p-sm-0 Footericons">
            <a target="_blank" href="https://www.facebook.com/memesdabola/photos/a.353545807997538/2481570548528376/?type=3&theater"> <img class="img-fluid footerSocials ml-2" src="Imagens/Footer icons/facebook_login.png" alt=""></a>
            <a target="_blank" href="https://twitter.com/MemesCentraI/status/1132355247169519616"><img class="img-fluid footerSocials ml-2" src="Imagens/Footer icons/twitter_login.png" alt=""></a>
            <a target="_blank" href="https://www.instagram.com/p/BxsEkDglPK-/"><img class="img-fluid footerSocials ml-2" src="Imagens//Footer icons/instagram_login.png" alt=""></a>
            <a target="_blank" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img class="img-fluid footerSocials ml-2" src="Imagens//Footer icons/youtube_login.png" alt=""></a>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  <script type="text/javascript" src="js/codigo.js"></script>






</body>

</html>