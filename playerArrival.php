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


  <main class="alturaMain text-white d-flex flex-column align-items-start bg-trueBlack">
    <article class="container-fluid p-0 pb-5">
      <iframe class="video" src="https://oload.site/embed/gxL-8ksWWh4" scrolling="yes" frameborder="0" width="100%" height="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
    </article>

    <article class="container-fluid  mainCentro pb-5">
      <div class="row d-flex justify-content-center">
        <p class="m-0 h1 mb-4 font-weight-bold text-dourado">Arrival</p>

      </div>

      <div class="row pb-2">
        <p class="col-12 m-0 text-center">2016</p>
      </div>
      <div class="row pb-2 mb-3">
        <div class="col-3 text-center pr-0">
          <p class="m-0">Drama</p>
        </div>
        <div class="col-1">
          <p>&bull;</p>
        </div>
        <div class="col-4 p-0 text-center">
          <p class="m-0">Action</p>
        </div>
        <div class="col-1">
          <p>&bull;</p>
        </div>
        <div class="col-3 text-center pl-0">
          <p class="m-0">Mistery</p>
        </div>
      </div>





      <p class="p-3 p-lg-0 pt-0 mb-4">Alien ships have reached the major cities of the world. With the intention of communicating with the visitors, a linguist and a military are called to decipher the strange messages from the visitors.</p>

      <div class="row">
        <div class="col-4 d-flex align-items-center justify-content-center"><i class="fa fa-star text-dourado fa-2x"></i>
          <p class="m-0 pl-2"> 7.9</p>
        </div>
        <div class="col-4 d-flex justify-content-center"><i class="fas fa-heart text-dourado fa-2x"></i></div>
        <div class="col-4 d-flex justify-content-center"><i class="fas fa-share-alt text-dourado fa-2x"></i></div>

      </div>

    </article>



    <?php
    require_once "components/cp_footer.php"
    ?>


    <div class="modal" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-preto">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
            <button type="button" class="btn bg-30" style="color: #eab200">Save changes</button>


          </div>
        </div>
      </div>
    </div>
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