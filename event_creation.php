<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  require_once "helpers/help_meta.php";
  require_once "helpers/help_css.php";
  ?>

  <title>Aplans</title>


</head>




<body>

  <!--NAV-->
  <!--/NAV-->

  <main class="text-black bg-white d-flex flex-column align-items-start topRedondo">
    <div class="w-100 d-flex flex-column">
      <div class="d-flex" style="width: inherit; background-color: #F1F3F6; z-index:2" id="navCompleta">
        <article class="container d-flex flex-column pl-3 pr-3 pt-4 pb-4" style="max-width:inherit; background-color: #3C5E77;" id="nav">
          <div class="align-items-center">
            <div class="d-flex align-items-center pr-3"> <img style="width: 1.1rem; height:1.1rem" src="images/others/back (5).png"> </div>
            <div class="d-flex justify-content-center" id="imagem">
              <div class="text-center btn-evento">
                <div class="current-event"><img src="images/tipos_evento/Vector.png" class="w-50"></div>
              </div>
            </div>
            <div class="d-flex flex-column align-items-center mt-2">

              <div class="mb-2" style="width: 50%;">
                <span class="textareaEventoNome" role="textbox" contenteditable></span>
              </div>
              <div id="data_evento"><input type="datetime-local" style="background:none;color:white;border:none;border-bottom:1px solid lightgrey"></div>
            </div>
          </div>
        </article>
      </div>
      <div class="w-100 pt-3" id="margem_conteudo">
        <div class="container-fluid">

          <h2 class="font-weight-bold mb-3">Dados do Evento</h2>

          <div class="mb-4">
            <h5 class="font-weight-bold">Local</h5>
            <span class="textareaLocal" role="textbox" contenteditable></span>
          </div>

          <div class="mb-4">
            <h5 class="font-weight-bold pt-2">Descrição</h5>
            <span class="textareaDescricao" role="textbox" contenteditable></span>
          </div>


          <div class="mb-4">
            <h5 class="font-weight-bold pt-2">Nº máximo participantes</h5>
            <div class="container-fluid pt-2 pl-0">
              <input class="nParticipantes" id="participantes" type="number" value="0" min="0" max="250"></input>
            </div>
          </div>

          <div class="mb-4">
            <h5 class="font-weight-bold">Adicionar tarefa</h5>

            <div class="d-flex">

              <div class="position-relative" style="width: 70%;">
                <span class="textareaTarefasNome mb-3" role="textbox" contenteditable></span>
                <span class="textareaTarefasDescricao mb-3" role="textbox" contenteditable></span>
                <input class="position-absolute" type="color">
              </div>

              <div style="width:30%;display:flex;">
                <div class="add-event">+</div>
              </div>

            </div>



            <div class="pt-4 mt-3 d-flex">

              <div style="width: 10%;"></div>

              <div style="width: 60%;">
                <div class="pl-3 d-flex align-items-center" style="border-left: 3px solid red">
                  <p class="settingsTituloTab m-0" style="color:red">Pipocas</p>
                </div>
                <div class="pl-3 pt-1 d-flex align-items-center" style="border-left: 3px solid red">
                  <p class="settingsTituloTab m-0" style="font-size: 1rem">5 baldes necessários</p>
                </div>
              </div>

              <div class="d-flex align-items-center justify-content-center" style="width: 30%;">

                <img style="width: 20%;" src="images/settings/minus.png">

              </div>

            </div>

          </div>

          <div class="tarefas_restantes_div"></div>

        </div>

      </div>





    </div>



  </main>

  <!--<div class="d-flex botao_criar_evento_align justify-content-center pb-4 pt-4">
    <button class="pl-3 pr-3 pt-1 pb-1 botaoCriarEvento">Criar Evento</button>
  </div>-->


  <?php
  require_once "helpers/help_js.php"
  ?>

  <script>
    $(function() {

      $('#participantes').niceNumber();

    });
  </script>



</body>

</html>