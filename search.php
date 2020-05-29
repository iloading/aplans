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

        <input type="text" name="search" placeholder="Search" class="bg-30 text-white p-2 mt-4 ml-2">

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

      <div class="p-1 mt-3 ml-2">
        <p style="font-size: 2.8rem">Search your favorite <span style="color: #eab200">Movies</span> and <span style="color: #eab200">TV Shows</span>...</p>



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