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