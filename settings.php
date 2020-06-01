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

  <main class="alturaMain text-black bg-white d-flex flex-column align-items-start">
    <article class="container p-0 mb-5 mainCentro">
      <section class="row mt-4 mb-4 ml-0 pl-sm-0">
        <div class="col-2 col-sm-1 text-center pr-0 pl-0 pt-1">
          <img src="imagens/settings/back.png" width="30" height="30">
        </div>

        <div class="col-8 col-sm-10 align-self-center pl-sm-5 pr-0">
          <p class="m-0 h1 text-left tituloTerms font-weight-bold">Outdoor Cinema</p>

        </div>

        <div class="col-1 col-sm-1 text-center pr-0 pl-2 pt-1">
          <img src="imagens/settings/trash.png" width="30" height="30">
        </div>

      </section>



      <div class="container-fluid p-0">

        <div>

        <div class="dropdown-divider m-0"></div>
          <div>
            <div class="row">
              <div class="p-4 ml-4 d-flex align-items-center">
                <img src="imagens/settings/clock.png" width="25" height="25">
              
              </div>

              <div class="p-3 d-flex align-items-center">
                <p class="settingsTituloTab m-0">10 pm, august 4, 2020</p>
            </div>
          </div>

          <div class="dropdown-divider m-0"></div>

          
          <div>
            <div class="row">
              <div class="p-4 ml-4 d-flex align-items-center">
                <img src="imagens/settings/location.png" width="25" height="25">
              
              </div>

              <div class="p-3 d-flex align-items-center">
                <p class="settingsTituloTab m-0">Key Gardens</p>
            </div>
          </div>

          <div class="dropdown-divider m-0"></div>

          <div>
            <div class="row">
              <div class="p-4 ml-4 d-flex align-items-center">
                <img src="imagens/settings/team.png" width="25" height="25">
              
              </div>

              <div class="p-3 d-flex align-items-center">
                <p class="settingsTituloTab m-0">10</p>
            </div>
            <div class="p-3 d-flex align-items-center ml-auto mr-4">
              <button type="button" class="p-1" style="border: none; border-radius: 5px; font-size: 1rem">Edit participants <img src="imagens/settings/draw.png" width="18" height="17" class="pl-1"></button>
            </div>
          </div>

          <div class="dropdown-divider m-0"></div>

          <div>
            <div class="row">
              <div class="p-4 ml-4 d-flex">
                <img src="imagens/settings/list.png" width="25" height="25">
              
              </div>
              <div>
                <div class="pl-3 pt-4 d-flex align-items-center">
                  <p class="settingsTituloTab m-0">Add a task</p>
                </div>
                <div class="pl-3 pt-1 d-flex align-items-center">
                  <p class="settingsTituloTab m-0" style="font-size: 1rem">Description</p>
                </div>
              </div> 
              <div class="p-3 d-flex align-items-center ml-auto mr-4">
                <img src="imagens/settings/add.png" width="22" height="20" class="pl-1">
            </div>
          </div>

          <div>
            <div class="row">
              <div class="p-4 ml-4 d-flex">
                <img src="imagens/settings/list.png" width="25" height="25" style="display:none;">
              
              </div>
              <div class="ml-4 pt-4">
                <div class="pl-3  d-flex align-items-center"  style="border-left: 3px solid red">
                  <p class="settingsTituloTab m-0" style="color:red">Popcorn</p>
                </div>
                <div class="pl-3 pt-1 d-flex align-items-center"  style="border-left: 3px solid red">
                  <p class="settingsTituloTab m-0" style="font-size: 1rem">5 buckets needed</p>
                </div>
              </div> 
              <div class="p-3 d-flex align-items-center ml-auto mr-4">
                <img src="imagens/settings/minus.png" width="22" height="20" class="pl-1">
            </div>
          </div>

          <div>
            <div class="row">
              <div class="p-4 ml-4 d-flex">
                <img src="imagens/settings/list.png" width="25" height="25" style="display:none;">
              
              </div>
              <div class="ml-4 pt-4">
                <div class="pl-3  d-flex align-items-center"  style="border-left: 3px solid blue">
                  <p class="settingsTituloTab m-0" style="color:blue">Drinks</p>
                </div>
                <div class="pl-3 pt-1 d-flex align-items-center"  style="border-left: 3px solid blue">
                  <p class="settingsTituloTab m-0" style="font-size: 1rem">Bringing the alchoolic beverages</p>
                </div>
              </div> 
              <div class="p-3 d-flex align-items-center ml-auto mr-4">
                <img src="imagens/settings/minus.png" width="22" height="20" class="pl-1">
            </div>
          </div>

          <div>
            <div class="row">
              <div class="p-4 ml-4 d-flex">
                <img src="imagens/settings/list.png" width="25" height="25" style="display:none;">
              
              </div>
              <div class="ml-4 pt-4">
                <div class="pl-3  d-flex align-items-center"  style="border-left: 3px solid green">
                  <p class="settingsTituloTab m-0" style="color:green">White Screen</p>
                </div>
                <div class="pl-3 pt-1 d-flex align-items-center"  style="border-left: 3px solid green">
                  <p class="settingsTituloTab m-0" style="font-size: 1rem">A big one</p>
                </div>
              </div> 
              <div class="p-3 d-flex align-items-center ml-auto mr-4">
                <img src="imagens/settings/minus.png" width="22" height="20" class="pl-1">
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

  <?php
  require_once "helpers/hp_js.php"
  ?>





</body>

</html>