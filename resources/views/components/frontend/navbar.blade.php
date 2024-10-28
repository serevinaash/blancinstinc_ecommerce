<header id="home">
            <div id="header-fixed-height"></div>
            <div id="sticky-header" class="tg-menu-area menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="flaticon-layout"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="logo">
                                        <a href={{route("index")}}>
                                            <img src={{url("/mppl/assets\img\Parfume-Asset\TRANSPARANT2.png")}} alt="Logo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-xl-flex">
                                        <ul class="navigation">
                                          <li class="active menu-item-has-children"><a href={{route ("index") }} class="section-link">Home</a>
                                            </li>
                                            <li><a href={{route ("blog") }} class="section-link">Blog</a></li>
                                            <li class="menu-item-has-children"><a href={{route ("shop")}} class="section-link">Shop</a>
                                      <ul class="sub-menu">
                                                    <li><a href={{route ("shop")}} >Our Shop</a></li>
                                                    <li><a href={{route ("shopDetails")}}>Shop Details</a></li>
                                                    <li><a href={{route ("cart")}}>Cart Page</a></li>
                                                    <li><a href={{route ("cart")}}>Checkout Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contacts</a></li>
                                            <li><a href="login.html" class="section-link">Login</a></li>
                                            <li><a href="register.html"class="section-link">Register</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn d-none d-sm-block">
                                        <a href="#order" class="tg-btn">Order Now</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>