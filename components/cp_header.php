<header id="wn__header" class="header__area header__absolute sticky__header" style="background-color: rgba(24, 26, 27, 0.5);">
    <div class=" container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo/logo.png" alt="logo images" width="125">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class="drop with--one--item"><a href="index.php">Home</a></li>
                        <li class="drop"><a href="shop-grid.php">Loja</a>
                        </li>

                        <li class="drop"><a> Sobre Nós</a>
                            <div class="megamenu dropdown">
                                <ul class="item item01">
                                    <li><a href="blog-details1.php">Terroir</a></li>
                                    <li><a href="blog-details2.php">O Know-How de 4 Gerações</a></li>
                                    <li><a href="blog-details3.php">Eventos e Prémios</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                    <li class="shop_search pr-4"><a class="search__active" href="#"></a></li>

                    <?php
                    // SÓ MOSTRA O CARRINHO SE ESTIVERMOS LOGADOS
                    if (isset($_SESSION['id_user_iloading'])) { ?>
                        <li class="shopcart"><a class="cartbox_active" href="#"></a>

                            <?php include_once "components/cp_show_cart.php";

                            echo '<span class="cartbox_active" style="background: gold none repeat scroll 0 0; border-radius: 100px; color: black; display: block; font-size: 9px;font-weight: 400;cursor:pointer;
			  height: 17px;			  line-height: 17px;			  margin: -8px 0 0;			  min-width: auto;			  overflow: visible;			  padding: 0;	  position: absolute;			  right: 0;			  text-align: center;              top: 40%;              left: 12%;
			  width: 16px;">' . $numProdutos . '</span>';

                            ?>

                        </li>
                    <?php } ?>

                    <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                        <div class="searchbar__content setting__block pt-0">
                            <div class="content-inner p-1 ">

                                <div class="switcher-currency ml-0 container">

                                    <?php
                                    //No botão de utilizador mostra conteúdo diferente consoante estamos ou não logados
                                    if (isset($_SESSION['email_iloading'])) {
                                        echo '<div class="label row d-flex">
                                            <div class="text-left col-1  m-0 p-0"><strong class=" text-success text-left h1 ">•</strong></div>

                                            <div class=" text-center col-11 m-0 p-0 text-lowercase">
                                                <div class="pl-1" style=" top: 25%; margin: auto;position: relative;"><strong>' . $_SESSION['email_iloading'] . '</strong></div>
                                            </div>
                                        </div>';
                                    }
                                    ?>
                                    <div class="label switcher-label text-center p-2">
                                        <?php if (isset($_SESSION['email_iloading'])) {
                                            echo '<div class=""><a href="my_acc.php">Minha conta</a></div>
                                            <div class=""><a href="scripts/sc_logout.php">Logout</a></div>';
                                        } else {
                                            echo '<div href="login.php" class=""><a href="login.php">Login & Registo</a></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <div class="setting__menu">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Start Mobile Menu -->
        <div class="row d-none">
            <div class="col-lg-12 d-none">
                <nav class="mobilemenu__nav">
                    <ul class="meninmenu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="about.html">About Page</a></li>
                                <li><a href="portfolio.html">Portfolio</a>
                                    <ul>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="login.php">My Account</a></li>
                                <li><a href="cart.php">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                <li><a href="error404.html">404 Page</a></li>
                                <li><a href="faq.html">Faq Page</a></li>
                                <li><a href="team.html">Team Page</a></li>
                            </ul>
                        </li>
                        <li><a href="shop-grid.php">Shop</a>
                            <ul>
                                <li><a href="shop-grid.php">Shop Grid</a></li>
                                <li><a href="single-product.html">Single Product</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog Page</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Mobile Menu -->
        <div class="mobile-menu d-block d-lg-none">
        </div>
        <!-- Mobile Menu -->
    </div>
</header>
<!-- Start Search Popup -->
<div class="brown--color box-search-content search_active block-bg close__top">
    <form id="search_mini_form" class="minisearch" action="shop-grid.php" method="post">
        <div class="field__search">
            <input type="text" name="pesquisa" autofocus="autofocus" placeholder="Search entire store here...">
            <div class="action">
                <input class="" value="Go" type="submit">
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>close</span>
    </div>
</div>
<!-- End Search Popup -->