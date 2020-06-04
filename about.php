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


  <main class="alturaMain text-white d-flex flex-column align-items-start">
    <article class="container-fluid p-0 mainCentro mb-5 alturaMain">

      <section class="row m-4 mb-4 ml-0 pl-sm-0">
        <div class="col-12 col-sm-10 align-self-center p-0 pl-xl-3 d-flex">
          <h2 class="col-10 text-index font-weight-bold">Outdoor Cinema</h2>
          <img class="col-2 p-0" src="imagens/about/clarity_settings-solid.png">
        </div>
        <div class="col-12 col-sm-10 align-self-center p-0 pl-xl-3 d-flex">
          <p class="col-10 text-index font-weight-bold">10 pm, august 4, 2020</p>
        </div>


      </section>

      <section class="row m-4 mb-4 ml-0 pl-sm-0">

        <div class="col-12 d-flex text-center">
          <p class="text-index col-3">MAIN</p>
          <p class="text-index col-3"">PEOPLE</p>
          <p class=" text-index col-3"">TASKS</p>
          <p class="text-index col-3"">CHAT</p>
        </div>

      </section>



      <div class=" m-4">
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