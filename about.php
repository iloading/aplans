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
    <article class="container-fluid p-0 mainCentro mb-5 alturaMain">

      <section class="row m-4 mb-4 ml-0 pl-3 pl-sm-0">
        <div class="col-2 col-sm-1 text-left pr-0 pl-0 pb-2 mr-1 mr-sm-4 mr-md-3">
          <img src="imagens/about/about%20_amarelo.png" width="50" height="50">
        </div>

        <div class="col-9 col-sm-10 align-self-center p-0 pl-xl-3">
          <p class="m-0 h1 text-left tituloTerms">About</p>

        </div>

      </section>


      <div class="m-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Morbi enim nunc faucibus a pellentesque. Nibh tortor id aliquet lectus proin. Malesuada pellentesque elit eget gravida cum sociis natoque penatibus et. Ac orci phasellus egestas tellus rutrum. Euismod elementum nisi quis eleifend quam adipiscing. Aliquam nulla facilisi cras fermentum odio eu. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Facilisis leo vel fringilla est. Amet cursus sit amet dictum. Aliquam etiam erat velit scelerisque. Massa id neque aliquam vestibulum morbi.</p>

        <p>Dictum at tempor commodo ullamcorper a. Dolor magna eget est lorem ipsum dolor sit amet consectetur. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Volutpat commodo sed egestas egestas fringilla. Potenti nullam ac tortor vitae purus faucibus ornare. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Massa eget egestas purus viverra. Arcu dictum varius duis at consectetur lorem donec. Cras semper auctor neque vitae tempus quam. Morbi tempus iaculis urna id volutpat lacus laoreet non curabitur. In nisl nisi scelerisque eu ultrices vitae. A condimentum vitae sapien pellentesque habitant morbi. Facilisis gravida neque convallis a cras semper auctor neque.</p>
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