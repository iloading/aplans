<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  require_once "helpers/help_meta.php";
  require_once "helpers/help_css.php";
  ?>

  <title>Bloop | </title>


</head>




<body class="bg-azul-aplans">

  <!--NAV-->
  <!--/NAV-->

  <main class="text-black bg-white d-flex flex-column align-items-start topRedondo">


    <article class="container d-flex flex-column pl-3 pr-3 pt-4 pb-4" style="max-width:inherit; background-color: #3C5E77;" id="nav">
      <div class="d-flex flex-column">


        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center "> <img style="width: 1.1rem; height:1.1rem" src="images/others/back (5).png"> </div>
        </div>



        <div class="d-flex justify-content-center">
          <div class="text-center btn-evento">
            <div class=" avatar-circular">
              <img src="assets/avatar.png">
            </div>
          </div>
        </div>


        <div class="d-flex justify-content-center">
          <h3 class="font-weight-bold text-branco-evento">Casandra Faneca</h3>
        </div>



        <div class="d-flex justify-content-center">
          <p style="color:#F1F3F6">22, student</p>
        </div>



      </div>

    </article>






    <div class="positon-relative container p-0 mb-5  d-flex flex-column pl-4 pr-4 pt-4 pb-4 m-0">

      <div>
        <div class="container d-flex flex-column mb-4 p-0">

          <h5 class="font-weight-bold">Email</h5>


          <span class="perfil_Inputs" role="textbox" contenteditable></span>

        </div>

        <div class="container d-flex flex-column mb-4 p-0">

          <h5 class="font-weight-bold">Morada</h5>
          <span class="perfil_Inputs" role="textbox" contenteditable></span>

        </div>


        <div class="container d-flex p-0 mb-4">

          <div class="container d-flex flex-column p-0 mr-2" style="width: 55%;">
            <h5 class="font-weight-bold">Telemovel</h5>
            <span class="perfil_Inputs" role="textbox" contenteditable></span>
          </div>


          <div class="container d-flex flex-column p-0" style="width: 45%;">
            <h5 class="font-weight-bold">Genero</h5>
            <select class="perfil_Inputs" name="genero">
              <option value="Masculino">Masculino</option>
              <option value="Feminino">Feminino</option>
              <option value="Outros">Outros</option>

            </select>

          </div>

        </div>

        <div class="container d-flex flex-column mb-4 p-0">

          <h5 class="font-weight-bold">Descrição</h5>
          <span class="perfil_Inputs" role="textbox" contenteditable></span>

        </div>



        <div class="container d-flex flex-column mb-4 p-0">


          <div class="perfil_Inputs text-center dropbtn" id="preferenciasMenu">
            <h5 class="font-weight-bold m-0 pt-2 pb-2">Preferencias</h5>
            <div class="d-flex justify-content-center">
              <img style="width: 1.1rem; height:1.1rem;transform: rotate(270deg);" src="images/others/back (5).png">
            </div>
          </div>

          <div id="preferenciasDrop" class="dropdown-content_preferencias">
            <div class="p-0">


              <div class="d-flex">
                <div>
                  <img src="images/others/utilizador.png" style="width:20px;"></div>
                <div>
                  <p class="m-0">Preferencia</p>
                </div>
                <div class="position-absolute" style="right: 5%;">
                  <input type="checkbox">
                </div>
              </div>


              <div class="d-flex">
                <div>
                  <img src="images/others/settings.png" style="width:20px;">
                </div>
                <div>
                  <p class="m-0">Preferencia</p>
                </div>
                <div class="position-absolute" style="right: 5%;">
                  <input type="checkbox">
                </div>
              </div>


              <div class="d-flex" style="background-color: rgba(240,52,52,0.5);/* background-color: white; */">
                <div><img src="images/others/sair.png" style="width:20px;">
              </div>
                <div>
                  <p class="m-0 font-weight-bold">Preferencia</p>
                </div>
                <div class="position-absolute" style="right: 5%;">
                  <input type="checkbox">
                </div>
              </div>



            </div>

            <div class="w-100 position-absolute text-center" id="fecharPessoasAdd" style="bottom:0;">
              <img src="images/others/close.png" style="width:3rem;">
            </div>
          </div>


        </div>




      </div>


  </main>



  <?php
  require_once "helpers/help_js.php"
  ?>

  <script>
    /* Quando o utilizador clica no seu avatar */
    function menu_avatar() {
      $("#preferenciasDrop").toggleClass("showPreferencias");
    }

    $(document).on("click", "#preferenciasMenu", function() {
      menu_avatar();
    });

    $(document).on("click", "#fecharPessoasAdd", function() {
      $("#preferenciasDrop").removeClass('showPreferencias');
    });
  </script>







</body>

</html>


<!--
<div class="container p-0 mb-5  d-flex flex-column pl-3 pr-3 pt-4 pb-4" style="height:100vh;">

  <div class="container-fluid p-0">


    <div class="row">
      <div class="p-4 ml-4 d-flex align-items-center">
        <h5>About me</h5>
      </div>

      <div class="pt-0 pl-4 pr-4 ml-4 d-flex align-items-center">
        <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie maecenas tempus turpis consectetur pharetra. Leo eget neque placerat eget sed. Vitae est fusce risus, vitae magna pulvinar eget. Pharetra dominum viverra egestas convallis purus sodales ac dolor, et cursus. Amet sit magna massa bibendum in quis.</p>
      </div>
    </div>

    <div class="w-100 m-0 justify-content-center d-flex">


      <div class="d-flex pl-4 pr-4" style="border:2px solid #BAE4AC;border-radius:16px">
        <div class="">
          <div class="botao-circular" style="margin-top: 50%;margin-bottom:50%;">+</div>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center pl-3">
          <p class="d-flex align-items-center" style="font-weight: 600;margin:0;">És novo na aplicação?</p>
          <p class="d-flex align-items-center" style="font-weight: 600;margin:0;">Adiciona novos amigos!</p>
        </div>

      </div>

    </div>



    <div>
      <div class="row">
        <div class="col-12 pl-4 pr-4 pb-2 pt-2 ml-4 d-flex align-items-center">
          <h5>Preferences</h5>
          <div class="p-3 d-flex align-items-center ml-auto mr-4">
            <button type="button" class="p-1" style="border: none; border-radius: 5px; font-size: 1rem">Edit <img src="images/settings/draw.png" width="18" height="17" class="pl-1"></button>
          </div>
        </div>

        <div class="col-12 pt-0 pl-4 pr-4 ml-4 ">
          <p class="font-weight-light mb-2">Sports Plans</p>

          <div id="myProgress1">
            <div id="myBar1"></div>
          </div>
        </div>

        <div class="col-12 pt-0 pl-4 pr-4 ml-4 mt-4">
          <p class="font-weight-light mb-2">Culinary Plans</p>

          <div id="myProgress2">
            <div id="myBar2"></div>
          </div>
        </div>

        <div class="col-12 pt-0 pl-4 pr-4 ml-4 mt-4">
          <p class="font-weight-light mb-2">Musical Plans</p>

          <div id="myProgress3">
            <div id="myBar3"></div>
          </div>
        </div>

        <div class="col-12 pb-4 pt-0 pl-4 pr-4 ml-4 mt-4">
          <p class="font-weight-light mb-2">Cinema Plans</p>

          <div id="myProgress4">
            <div id="myBar4"></div>
          </div>
        </div>





      </div>

    </div>




  </div>

</div>-->