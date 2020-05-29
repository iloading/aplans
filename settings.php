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
    <article class="container p-0 mb-5 mainCentro">
      <section class="row mt-4 mb-4 ml-0 pl-3 pl-sm-0">
        <div class="col-2 col-sm-1 text-left pr-0 pl-0">
          <img src="imagens/settings/settings_amarelo.png" width="60" height="60">
        </div>

        <div class="col-9 col-sm-11 align-self-center pl-3 pl-sm-5 pr-0">
          <p class="m-0 h1 text-left tituloTerms">Settings</p>

        </div>

      </section>



      <div class="container-fluid p-0">

        <h4 class="settingsTitulo bg-preto m-0 p-3">Video</h4>

        <div class="bg-trueBlack">

          <div class="container-fluid">
            <div class="row">
              <div class="col-6 p-3">
                <p class="settingsTituloTab m-0">Offline Mode</p>
                <p class="settingsInfo m-0">Going offline for 6 hours</p>
              </div>

              <div class="col-6 p-3 d-flex align-items-center justify-content-end">
                <label class="switch m-0">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
          </div>

          <div class="dropdown-divider m-0"></div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-6 p-3">
                <p class="settingsTituloTab m-0">Subtitles</p>
                <p class="settingsInfo m-0">Change subtitles size</p>
              </div>

              <div class="col-6 p-3 text-right">
                <select class="mdb-select md-form">
                  <option value="" disabled selected>Default</option>
                  <option value="1">Small</option>
                  <option value="2">Medium</option>
                  <option value="3">Large</option>
                </select>
              </div>

            </div>
          </div>

          <div class="dropdown-divider m-0"></div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-6 p-3">
                <p class="settingsTituloTab m-0">High Definition</p>
                <p class="settingsInfo m-0">Enable high definition streaming </p>
              </div>

              <div class="col-6 p-3 d-flex align-items-center justify-content-end">
                <label class="switch m-0">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
          </div>

          <div class="dropdown-divider m-0"></div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-6 p-3">
                <p class="settingsTituloTab m-0">Cellular Data</p>
                <p class="settingsInfo m-0">Allow the use off cellular data for streaming</p>
              </div>

              <div class="col-6 p-3 text-right">
                <select class="mdb-select md-form">
                  <option value="" disabled selected>Default</option>
                  <option value="1">Off</option>
                  <option value="2">Automatic</option>
                  <option value="3">Wi-fi Only</option>
                </select>

              </div>

            </div>
          </div>

          <div class="dropdown-divider m-0"></div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-6 p-3">
                <p class="settingsTituloTab m-0">Notifications</p>
                <p class="settingsInfo m-0">Enable notifications while streaming</p>
              </div>

              <div class="col-6 p-3 d-flex align-items-center justify-content-end">
                <label class="switch m-0">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
          </div>

        </div>

      </div>
      <div class="mt-4 container-fluid p-0">

        <h4 class="settingsTitulo bg-preto m-0 p-3">Audio</h4>

        <div class="bg-trueBlack">



          <div class="container-fluid">
            <div class="row">
              <div class="col-6 p-3">
                <p class="settingsTituloTab m-0">Normalize</p>
                <p class="settingsInfo m-0">Normalize your streaming audio</p>
              </div>

              <div class="col-6 p-3 d-flex align-items-center justify-content-end">
                <label class="switch m-0">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
          </div>

          <div class="dropdown-divider m-0"></div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-6 p-3">
                <p class="settingsTituloTab m-0">Autoplay</p>
                <p class="settingsInfo m-0">Start playing next episode automatically</p>
              </div>

              <div class="col-6 p-3 d-flex align-items-center justify-content-end">
                <label class="switch m-0">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
          </div>

          <div class="dropdown-divider m-0"></div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-6 p-3">
                <p class="settingsTituloTab m-0">Streaming</p>
                <p class="settingsInfo m-0">Streaming audio quality</p>
              </div>

              <div class="col-6 p-3 text-right dropUp">
                <select class="mdb-select md-form">
                  <option value="" disabled selected>Default</option>
                  <option value="1">Low</option>
                  <option value="2">High</option>
                </select>

              </div>

            </div>

          </div>

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