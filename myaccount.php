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
    <article class="container-fluid p-0 mainCentro alturaMain">




      <div class="mt-3 text-center titulosAccount ">

        <div class="row">
          <div class=" col-3 col-sm-4 p-0"></div>
          <div class="col-6 col-sm-4 p-0">
            <img src="imagens/Persona.png" class="boneco mt-5 p-2" width="200" height="200">
          </div>

          <div class="col-1 d-flex align-items-end">
            <a href="" class="minhacontaHover"><i class="fas fa-pencil-alt"></i></a>
          </div>
          <div class=" col-2 col-sm-3 p-0"></div>
        </div>

        <div class="container-fluid mt-5 p-3 bg-preto">
          <a href="details.html" class="minhacontaHover">
            <p class="p-2">Details <i class="fas fa-info-circle pl-1" style="color: #eab200"></i></p>
          </a>
          <a href="settings.html" class="minhacontaHover">
            <p class="p-2">Settings <i class="fa fa-cog pl-1" style="color: #eab200"></i></p>
          </a>
          <a href="favorites.html" class="minhacontaHover">
            <p class="p-2">My Favourites <i class="fas fa-heart pl-1" style="color: #eab200"></i></p>
          </a>
          <a href="EE/Building2.html" class="minhacontaHover">
            <p class="p-2">Recently Watched <i class="fas fa-eye pl-1" style="color: #eab200"></i></p>
          </a>
          <a href="faq.html" class="minhacontaHover">
            <p class="p-2">FaQ <i class="fas fa-question pl-1" style="color: #eab200"></i></p>
          </a>
          <a href="terms.html" class="minhacontaHover">
            <p class="p-2">Terms And Conditions <i class="fas fa-clipboard pl-1" style="color: #eab200"></i></p>
          </a>
        </div>

        <div class="container-fluid mt-4 p-0 bg-trueBlack">
          <a href="landingPage.html" class="minhacontaHover">
            <p class="p-3">Log Out <i class="fas fa-sign-out-alt pl-1" style="color: #eab200"></i></p>
          </a>
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






</body>

</html>