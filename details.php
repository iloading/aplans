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
    <article class="container p-3 mainCentro alturaMain">

      <section class="row mt-4 mb-4 ml-0 pl-3 pl-sm-0">
        <div class="col-2 col-sm-1 text-left pr-0 pl-0 pb-2 mr-1 mr-sm-4 mr-md-3">
          <img src="imagens/login/user_amarelo.png" width="50" height="50">
        </div>

        <div class="col-9 col-sm-10 align-self-center p-0 pl-xl-3">
          <p class="m-0 h1 text-left tituloTerms">Details</p>

        </div>

      </section>



      <div>
        <form action="index.html" method="get" id="form1">
          <div id="dynamic_container">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text br-15"><i class="fas fa-at"></i></span>
              </div>
              <input type="email" placeholder="Email" class="form-control" />
            </div>
            <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text br-15"><i class="fas fa-lock"></i></span>
              </div>
              <input type="password" placeholder="Password" class="form-control" />
            </div>
            <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text br-15"><i class="fas fa-phone"></i></span>
              </div>
              <input type="number" id="UserMobile" min="1" max="5" data-fv-numeric="true" data-fv-numeric-message="Please enter valid phone numbers" data-fv-phone-country11="IN" required="required" data-fv-notempty-message="This field cannot be left blank." placeholder="(+351) Phone Number" class="form-control" name="data[User][mobile]" data-fv-field="data[User][mobile]">
            </div>
            <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text br-15"><i class="fas fa-map-pin"></i></span>
              </div>
              <input type="text" placeholder="Adress" class="form-control" />
            </div>

            <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text br-15"><i class="fas fa-map"></i></span>
              </div>
              <input type="text" placeholder="District (eg: Porto, Braga, Aveiro...)" class="form-control" />
            </div>
            <div class="row">
              <div class="input-group mt-3 col-6">
                <div class="input-group-prepend">
                  <span class="input-group-text br-15"><i class="fas fa-university"></i></span>
                </div>
                <input type="text" placeholder="City (eg: Tabuaço)" class="form-control" />
              </div>

              <div class="input-group mt-3 col-6">
                <div class="input-group-prepend">
                  <span class="input-group-text br-15"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="text" maxlength="8" placeholder="Zip (xxxx-xxx)" class="form-control" />
              </div>
            </div>


            <fieldset class="form-group mt-3 ml-2">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Subscription</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio1">Free (Default)</label>
                    </div>
                  </div>
                  <div class="form-check">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio2">Semi-Pro (Monthly)</label>
                    </div>
                  </div>
                  <div class="form-check">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio3">Pro (Annual)</label>
                    </div>
                  </div>

                </div>
              </div>
            </fieldset>





          </div>


        </form>
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