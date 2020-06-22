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
    <article class="container p-0 mb-5 mainCentro">
      <section class="row mt-5 mb-2 ml-5 pl-sm-0">

        <div class="col-8 col-sm-10 align-self-center pl-0">
          <p class="m-0 h1 text-left tituloTerms font-weight-normal" style="font-size: 2rem; color: #3C5E77">My Profile</p>

        </div>

        <div class="col-4 col-sm-1 pr-0 pl-2 pt-1 d-flex align-items-center justify-content-center">
          <img src="images/profile/more.png" width="30" height="30">
        </div>

      </section>



      <div class="container-fluid p-0">

        

        
            <div class="row mb-4 pt-3">
              <div class="pl-4 pt-4 pb-4 pr-0 ml-4 d-flex align-items-center col-3">
                <div class=" avatar-circular">
                     <img src="assets/avatar.png">
                </div>
              
              </div>

              <div class="pl-3 d-flex align-items-center col-6">
                <div class="row">
                    <h5 class="col-12">Miguel Costa</h5>
                    <p class="col-12" style="margin-bottom: 8px;">22, student</p>
                    <div class="col-12">
                        <img src="images/profile/starfill.png" width="16" height="16">
                        <img src="images/profile/starfill.png" width="16" height="16">
                        <img src="images/profile/starfill.png" width="16" height="16">
                        <img src="images/profile/starfill.png" width="16" height="16">
                        <img src="images/profile/starfill.png" width="16" height="16">
                        
                    </div>
                </div>
            </div>
          </div>

          

          
          <div>
            <div class="row">
              <div class="col-12 p-4 ml-4 d-flex align-items-center">
                <h5>About me</h5>
              </div>

              <div class="col-11 pt-0 pl-4 pr-4 ml-4 d-flex align-items-center">
                <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie maecenas tempus turpis consectetur pharetra. Leo eget neque placerat eget sed. Vitae est fusce risus, vitae magna pulvinar eget. Pharetra  dominum viverra egestas convallis purus sodales ac dolor, et cursus. Amet sit magna massa bibendum in quis.</p>
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
      
    </article>

    

  </main>


  <?php
  require_once "helpers/help_js.php"
  ?>





</body>

</html>