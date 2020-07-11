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
      <div class="position-fixed" style="width: inherit; background-color: #F1F3F6; z-index:2" id="navCompleta">
        <article class="container d-flex flex-column pl-3 pr-3 pt-4 pb-4" style="max-width:inherit; background-color: #3C5E77;" id="nav">
          <div class="align-items-center">
            <div class="d-flex align-items-center pr-3"> <img style="width: 1.1rem; height:1.1rem" src="images/others/back (5).png"> </div>
            <div class="d-flex justify-content-center" id="imagem">
              <div class="text-center btn-evento">
                <div class="current-event"><img src="images/tipos_evento/Vector.png" class="w-50"></div>
              </div>
            </div>
            <div class="d-flex flex-column pl-3 justify-items-center">
              <div id="titulo">
                <h4 class="font-weight-bold text-branco-evento"><input type="text" placeholder="Choose Name"></h4>
              </div>
              <div id="data_evento"><input type="date"></div>
            </div>
          </div>
        </article>
      </div>
      <div class="w-100 pt-3" style="margin-top: 13rem;" id="margem_conteudo">
        <div class="container-fluid">
          <h5 class="font-weight-bold">Local</h5>
          <span class="textareaLocal" role="textbox" contenteditable></span>
          <h5 class="font-weight-bold pt-2">Descrição</h5>
          <span class="textareaDescricao" role="textbox" contenteditable></span>
          <div>
            <h5 class="font-weight-bold pt-2">Participantes</h5>
          </div>
          <div class="container-fluid pt-2">
            <input id="participantes" type="number" value="0" min="0" max="250"></input>
          </div>
          <div class="marginT">
            <h5 class="font-weight-bold">Tarefas</h5>
          </div>
          <div class="tarefas_restantes_div"></div>
         
        </div>
          
        </div>
      </div>



  </main>


  <?php
  require_once "helpers/help_js.php"
  ?>

<script>
  $(function(){

    $('#participantes').niceNumber();

  });
</script>



</body>

</html>