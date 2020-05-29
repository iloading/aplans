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


  <main id="main" class="alturaMain text-white bg-30 d-flex flex-column align-items-start">
    <article class="container-fluid alturaIndex p-0 ">
      <div class="container-fluid mt-4">
        <div class="row">

          <div class="card-deck m-2">
            <div class="card bg-preto">
              <img class="card-img-top" src="imagens/index/main1.jpg" alt="Card image cap">
              <div class="card-block p-3 container-fluid">
                <h4 class="card-title text-dourado">Card title</h4>
                <p class="card-text text-white">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>

              <div class="container-fluid p-0">
                <button onclick="window.location.href='https://www.autosprintchicago.com/blog/2017/10/11/the-history-of-lancia'" class="mt medium diagonal ml-3 mb-3">
                  Learn More
                </button>
              </div>

            </div>



            <div class="card bg-preto">
              <img class="card-img-top" src="imagens/index/main1.jpg" alt="Card image cap">
              <div class="card-block p-3 container-fluid">
                <h4 class="card-title text-dourado">Card title</h4>
                <p class="card-text text-white">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="container-fluid p-0">
                <button onclick="window.location.href='https://www.autosprintchicago.com/blog/2017/10/11/the-history-of-lancia'" class="mt medium diagonal ml-3 mb-3">
                  Learn More
                </button>
              </div>
            </div>



            <div class="card bg-preto">
              <img class="card-img-top" src="imagens/index/main1.jpg" alt="Card image cap">
              <div class="card-block p-3 container-fluid">
                <h4 class="card-title text-dourado">Card title</h4>
                <p class="card-text text-white">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="container-fluid p-0">
                <button onclick="window.location.href='https://www.autosprintchicago.com/blog/2017/10/11/the-history-of-lancia'" class="mt medium diagonal ml-3 mb-3">
                  Learn More
                </button>
              </div>
            </div>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  <script type="text/javascript" src="js/codigo.js"></script>
  <script type="text/javascript" src="js/carousel.js"></script>






</body>

</html>