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