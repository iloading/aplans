  <nav class="navbar navbar-dark navbar-expand-lg bg-preto justify-content-start">
      <div class="container-fluid">
          <div id="nav-icon4" class="collapse navbar-toggler" data-target=".dual-nav">
              <span></span>
              <span></span>
              <span></span>
          </div>
          <div class="navbar-collapse collapse dual-nav w-50 mobileMenu d-flex flex-column flex-lg-row justify-content-lg-around p-3 p-lg-0 mt-6 mt-lg-0">
              <ul class="navbar-nav align-self-stretch menuAlinhado h-100">
                  <li class="nav-item m-2 d-lg-none"> <img class="rounded-circle" width="75" height="75" style="border: 2px solid #eab200" src="imagens/Persona.png" alt="">
                      <p class="FontMobile text-white d-inline font-weight-bold pt-2 pl-1">Rui Matos Faria</p>
                      <div class="dropdown-divider bg-white mt-3"></div>
                  </li>
                  <li class="nav-item m-2 mt-0">
                      <i class="fas fa-film text-white"></i>
                      <a class="nav-link pl-2 d-inline" href="searchresults - movies.php">Movies</a>
                  </li>
                  <li class="nav-item m-2">
                      <i class="fas fa-desktop text-white"></i>
                      <a class="nav-link pl-2 d-inline" href="searchresults - tvshows.php">TV Shows</a>
                  </li>
                  <li class="nav-item m-2 dropdown">
                      <i class="fas fa-bars text-white ml-1"></i>
                      <a class="nav-link dropdown-toggle d-inline pl-2" data-toggle="dropdown" href="categorias.php" role="button" aria-haspopup="true" aria-expanded="false" role="menu">Categories</a>
                      <div class="dropdown-menu scroll navmobile bg-preto pt-0 pb-0">
                          <div class="dropdown-divider mt-0"></div>
                          <a class="dropdown-item" href="action.php">Action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="drama.php">Drama</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="crime.php">Crime</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="ee.php">Terror</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="ee.php">Sci-Fi</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="ee.php">Romance</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="ee.php">Thriller</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="ee.php">Mystery</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="ee.php">Animation</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Adventure</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="ee.php">Fantasy</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="ee.php">Comedy</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="ee.php">Super-Hero</a>
                          <div class="dropdown-divider"></div>
                      </div>
                  </li>
                  <li class="nav-item m-2 mt-4 d-lg-none">
                      <a class="nav-link d-inline pr-2" href="myaccount.php">My Account</a><i class="fas fa-chevron-right" style="padding-top: 0.3rem; color:rgba(255, 255, 255, 0.8)"></i>
                      <div class="dropdown-divider bg-white"></div>
                      <div class="m-3"><i class="fas fa-info-circle text-white"></i><a class="nav-link ml-3 d-inline" href="details.php">Details</a></div>
                      <div class="m-3"><i class="fas fa-heart text-white"></i><a class="nav-link ml-3 d-inline" href="favorites.php">My Favorites</a></div>
                      <div class="m-3"><i class="fas fa-cog text-white"></i><a class="nav-link ml-3 d-inline" href="settings.php">Settings</a></div>
                  </li>
                  <li class="nav-item d-lg-none pr-1 pt-5 text-right">
                      <a class="nav-link" href="landingPage.php">Log Out <i class="fas fa-sign-out-alt pl-1" style="color:#eab200; width:unset"></i></a>
                  </li>


              </ul>
          </div>
          <a href="index.php" class="navbar-brand mx-auto d-flex text-center pr-5 pr-lg-0"> <img class="" src="./imagens/logo/logo_nav2.png" alt="">

          </a>

          <div class="navbar-collapse collapse dual-nav w-50">
              <ul class="nav navbar-nav d-flex flex-row ml-auto justify-content-center align-items-center searchEuser">

                  <li class="nav-item pr-2 pr-sm-4 pr-md-5">
                      <div class="search-box">
                          <input type="text" name="" class=" search-txt" placeholder="Type to search" />
                          <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
                      </div>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="p-2"> <img class="userLogo" src="Imagens/user_branco.png" alt="">
                          <div class="dropdown-content">

                              <ul class="navbar-nav d-flex flex-column w-100">
                                  <li class="nav-item"> <img class="rounded-circle" width="75" height="75" style="border: 2px solid #eab200" src="imagens/Persona.png" alt="">
                                      <p class="FontMobile text-white d-inline font-weight-bold pt-2 mr-4 pl-2 pr-4">Rui Matos Faria</p>
                                  </li>
                                  <li class="nav-item mt-2 pl-2 pr-2 bg-30" style="border-radius: 10px 10px 0 0;">
                                      <a class="nav-link d-inline pr-2 font-weight-bolder" href="myaccount.php">My Account</a><i class="fas fa-chevron-right" style="padding-top: 0.3rem; color:rgba(255, 255, 255, 0.8)"></i>
                                      <div class="m-3"><i class="fas fa-info-circle text-white"></i><a class="nav-link ml-1 d-inline" href="details.php">Details</a></div>
                                      <div class="m-3"><i class="fas fa-heart text-white"></i><a class="nav-link ml-1 d-inline" href="favorites.php">My Favorites</a></div>
                                      <div class="m-3"><i class="fas fa-cog text-white"></i><a class="nav-link ml-1 d-inline" href="settings.php">Settings</a></div>
                                  </li>
                                  <li class="nav-item LogOut text-right bg-30">
                                      <a class="nav-link" href="landingPage.php">Log Out <i class="fas fa-sign-out-alt pl-1" style="color:#eab200; width:unset"></i></a>
                                  </li>
                              </ul>

                          </div>
                      </a>
                  </li>
              </ul>
          </div>

      </div>
  </nav>

  
  <div class="overlay"> </div>