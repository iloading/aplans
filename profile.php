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
    <article class="container d-flex flex-column pl-3 pr-3 pt-4 pb-4" style="max-width:inherit; background-color: #3C5E77;">
      <div>
        <div class="d-flex align-items-center justify-content-between"> <img style="width: 1.1rem; height:1.1rem;" src="images/others/back (5).png">
        </div>

        <div class="d-flex justify-content-center">
          <div class="avatar-circular-perfil">
            <img class="w-100" src="assets/avatar.png">


          </div>
          <span class="estado-online" style="position:absolute;bottom:-5%;"></span>
        </div>

        <div class="d-flex justify-content-center">
          <h3 class="font-weight-bold text-branco-evento m-0">ola</h3>
        </div>

      </div>








    </article>
















    <div class="positon-relative container p-0 mb-5 d-flex flex-column pl-4 pr-4 pt-4 pb-4 m-0">
      <div>
        <div class="container d-flex flex-column mb-4 p-0">
          <h5 class="font-weight-bold">Nome</h5> <span id="nomeEditar" class="perfil_Inputs_nome" role="textbox" contenteditable>' + data.perfil[i]["nome"] + '</span>
        </div>
        <div class="container d-flex flex-column mb-4 p-0">
          <h5 class="font-weight-bold">Email</h5> <span id="emailEditar" class="perfil_Inputs_email" role="textbox" contenteditable>' + data.perfil[i]["email"] + '</span>
        </div>
        <div class="container d-flex flex-column mb-4 p-0">
          <h5 class="font-weight-bold">Morada</h5> <span id="moradaEditar" class="perfil_Inputs_morada" role="textbox" contenteditable>' + data.perfil[i]["morada"] + '</span>
        </div>
        <div class="container d-flex flex-column mb-4 p-0">
          <h5 class="font-weight-bold">Codigo Postal</h5> <span id="postalEditar" class="perfil_Inputs_postal" role="textbox" contenteditable>' + data.perfil[i]["codigo_postal"] + '</span>
        </div>
        <div class="container d-flex p-0 mb-4">
          <div class="container d-flex flex-column p-0 mr-2" style="width: 55%;">
            <h5 class="font-weight-bold">Telemóvel</h5> <span id="telemovelEditar" class="perfil_Inputs_telemovel" role="textbox" contenteditable>' + data.perfil[i]["telemovel"] + '</span>
          </div>
          <div class="container d-flex flex-column p-0" style="width: 45%;">
            <h5 class="font-weight-bold">Género</h5> <select id="novo_organizador" class="perfil_Inputs" name="genero" style="color:grey;">'+cadaGenero+' </select>
          </div>
        </div>
        <div class="container d-flex flex-column mb-4 p-0">
          <h5 class="font-weight-bold">Descrição</h5> <span id="descricaoEditar" class="perfil_Inputs_descricao" role="textbox" contenteditable>' + data.perfil[i]["descricao"] + '</span>
        </div>
      </div>
      <div class="text-center"><button id="botaoEditarPerfil" class="pl-3 pr-3 pt-1 pb-1 botaoCriarEvento">Atualizar</button></div>
  </main>

  <?php
  require_once "helpers/help_js.php"
  ?>








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