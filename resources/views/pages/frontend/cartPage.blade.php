@extends("layouts.frontend")
@section("content")
<body>

    <!-- Pre-loader-start -->
    <div id="preloader">
        <div class="tg-cube-grid">
            <div class="tg-cube tg-cube1"></div>
            <div class="tg-cube tg-cube2"></div>
            <div class="tg-cube tg-cube3"></div>
            <div class="tg-cube tg-cube4"></div>
            <div class="tg-cube tg-cube5"></div>
            <div class="tg-cube tg-cube6"></div>
            <div class="tg-cube tg-cube7"></div>
            <div class="tg-cube tg-cube8"></div>
            <div class="tg-cube tg-cube9"></div>
        </div>
    </div>
    <!-- Pre-loader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
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
                                    <a href="index-2.html">
                                        <img src="assets/img\Parfume-Asset/TRANSPARANT Type 2.png" alt="Logo">
                                    </a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-xl-flex">
                                    <ul class="navigation">
                                        <li class="active menu-item-has-children"><a href="index-2.html" class="section-link">Home</a>
                                        </li>
                                        <li><a href="blog.html" class="section-link">Blog</a></li>
                                        <li class="menu-item-has-children"><a href="#shop" class="section-link">Shop</a>
                                  <ul class="sub-menu">
                                                <li><a href="shop.html">Our Shop</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contacts</a></li>
                                        <li><a href="login.html" class="section-link">Login</a></li>
                                        <li><a href="register.html"class="section-link">Register</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn d-none d-sm-block">
                                    <a href="shop.html" class="tg-btn">Order Now</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->


    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="breadcrumb-content text-center">
                            <h2 class="title">Cart Page</h2>
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item trail-item trail-begin">
                                        <a href="index-2.html"><span>Home</span></a>
                                    </li>
                                    <li class="breadcrumb-item trail-item trail-end"><span>Cart</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-shape one"><img src="assets/img/others/video_shape01.png" alt="shape"></div>
            <div class="video-shape two"><img src="assets/img/others/video_shape02.png" alt="shape"></div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- cart-area -->
        <div class="cart__area section-py-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <table class="table cart__table">
                            <thead>
                                <tr>
                                    <th class="product__thumb">&nbsp;</th>
                                    <th class="product__name">Product</th>
                                    <th class="product__price">Price</th>
                                    <th class="product__quantity">Quantity</th>
                                    <th class="product__subtotal">Subtotal</th>
                                    <th class="product__remove">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product__thumb">
                                        <a href="shop-details.html"><img src="assets/img/Parfume-Asset/aboutus.png"
                                                alt=""></a>
                                    </td>
                                    <td class="product__name">
                                        <a href="shop-details.html">Antiaging and Longevity</a>
                                    </td>
                                    <td class="product__price">$13.00</td>
                                    <td class="product__quantity">
                                        <div class="quickview-cart-plus-minus">
                                            <input type="text" value="1">
                                        </div>
                                    </td>
                                    <td class="product__subtotal">$13.00</td>
                                    <td class="product__remove">
                                        <a href="#">×</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__thumb">
                                        <a href="shop-details.html"><img src="assets/img/Parfume-Asset/aboutus.png"
                                                alt=""></a>
                                    </td>
                                    <td class="product__name">
                                        <a href="shop-details.html">Time to Explore</a>
                                    </td>
                                    <td class="product__price">$19.00</td>
                                    <td class="product__quantity">
                                        <div class="quickview-cart-plus-minus">
                                            <input type="text" value="1">
                                        </div>
                                    </td>
                                    <td class="product__subtotal">$19.00</td>
                                    <td class="product__remove">
                                        <a href="#">×</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="cart__actions">
                                        <form action="#" class="cart__actions-form">
                                            <input type="text" placeholder="Coupon code">
                                            <button type="submit" class="btn btn-sm">Apply coupon</button>
                                        </form>
                                        <div class="update__cart-btn text-end f-right">
                                            <button type="submit" class="btn btn-sm">Update cart</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart__collaterals-wrap">
                            <h2 class="title">Cart totals</h2>
                            <ul class="list-wrap">
                                <li>Subtotal <span>$32.00</span></li>
                                <li>Total <span class="amount">$32.00</span></li>
                            </ul>
                            <a href="checkout.html" class="btn btn-sm">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-area-end -->

    </main>
    <!-- main-area-end -->


    <!-- Footer-area -->
    <footer class="footer-area not-show-instagram">
        <div class="footer-top-wrap">
            <div class="container">
                <div class="footer-widgets-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-7">
                            <div class="footer-widget">
                                <div class="footer-about">
                                    <div class="footer-logo logo">
                                            <a href="index-2.html"><img src="assets/img\Parfume-Asset/TRANSPARANT Type 1.png" alt="Logo"></a>
                                    </div>
                                    <div class="footer-text">
                                        <p>Making beauty especially relating complot especial common questions tend to
                                            recur through posts or queries standards vary orem donor command tei.</p>
                                    </div>
                                    <div class="footer-social">
                                                                                    <a href="https://www.facebook.com/profile.php?id=61551353680098&ref=xav_ig_profile_web"><i class="fab fa-facebook-f"></i></a>

                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                                                  <a href="https://www.instagram.com/blancinstinc"><i class="fab fa-instagram"></i></a>

                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">About Us</h4>
                                <ul class="list-wrap">
                                    <li><a href="#">About Company</a></li>
                                    <li><a href="#">Affiliate Program</a></li>
                                    <li><a href="#">Customer Spotlight</a></li>
                                    <li><a href="#">Reseller Program</a></li>
                                    <li><a href="shop.html">Our Shop</a></li>
                                    <li><a href="#">Price & Plans</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-5 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">Support</h4>
                                <ul class="list-wrap">
                                    <li><a href="#">Knowledge Base</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="#">Developer API</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <div class="footer-widget">
                                <h4 class="fw-title">CONTACT US</h4>
                                <div class="footer-contact-wrap">
                                    <p>Jl. A.H. Nasution No.105, Cipadung Wetan, Kec. Cibiru, Kota Bandung, Jawa Barat 40614</p>
                                    <ul class="list-wrap">
                                        <li class="phone"><i class="fas fa-phone"></i> +62 858-4673-7274
</li>
                                        <li class="mail"><i class="fas fa-envelope"></i> Suxnix@example.com</li>
                                        <li class="website"><i class="fas fa-globe"></i> www.suxnixdomain.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-shape one">
                <img src="assets/img/others/footer_shape01.png" alt="img" class="wow fadeInLeft" data-wow-delay=".3s"
                    data-wow-duration="1s">
            </div>
            <div class="footer-shape two">
                <img src="assets/img/others/footer_shape02.png" alt="img" class="wow fadeInRight" data-wow-delay=".3s"
                    data-wow-duration="1s">
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="copyright-text">
                            <p>Copyright © 2024 Suxnix All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="payment-card text-center text-md-end">
                            <img src="assets/img/others/card_img.png" alt="card">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer-area-end -->





    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.paroller.min.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/jquery.inview.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/svg-inject.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/validator.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        SVGInject(document.querySelectorAll("img.injectable"));
    </script>
</body>

@endsection