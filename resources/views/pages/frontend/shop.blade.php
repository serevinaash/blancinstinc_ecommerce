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


        <!-- main-area -->
        <main class="main-area fix">

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="breadcrumb-content text-center">
                                <h2 class="title">Our Shop</h2>
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item trail-item trail-begin">
                                            <a href="index-2.html"><span>Home</span></a>
                                        </li>
                                        <li class="breadcrumb-item trail-item trail-end"><span>Our Shop</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-shape one"><img src={{url("/mppl/assets/img/others/video_shape01.png")}} alt="shape" /></div>
                
                <div class="video-shape two"><img src={{url("/mppl/assets/img/others/video_shape02.png")}} alt="shape" /></div>
            </section>
            <!-- breadcrumb-area-end -->

            <div class="inner-shop-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-8 col-sm-8">
                            <aside class="shop-sidebar">
                                <div class="widget">
                                    <h4 class="sidebar-title">Filter by Price</h4>
                                    <div class="price_filter">
                                        <div id="slider-range"></div>
                                        <div class="price_slider_amount">
                                            <span>Price :</span>
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                            <input type="submit" class="btn" value="Filter">
                                        </div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h4 class="sidebar-title">CATEGORIES</h4>
                                    <ul class="categories-list list-wrap">
                                        <li><a href="shop.html">ACCESSORIES <i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                        <li><a href="shop.html">gym supplement <i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                        <li><a href="shop.html">man gym <i class="fas fa-angle-double-right"></i></a>
                                        </li>
                                        <li><a href="shop.html">fitness gym <i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                        <li><a href="shop.html">weight loss <i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h4 class="sidebar-title">LATEST PRODUCTS</h4>
                                    <div class="lp-post-list">
                                        <ul class="lp-post-item list-wrap">
                                            <li>
                                                <div class="lp-post-thumb">
                                                    <a href="shop-details.html"><img src={{url("/mppl/assets/img/Parfume-Asset/image_FGk.png")}} alt="img"></a>
                                                </div>
                                                <div class="lp-post-content">
                                                    <ul class="lp-post-rating list-wrap">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <h4 class="title"><a href="shop-details.html">multi vitamin C</a>
                                                    </h4>
                                                    <span class="price">$29.00</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="lp-post-thumb">
                                                    <a href="shop-details.html"><img
                                                            src={{url("/mppl/assets/img/Parfume-Asset/image_BGa.png")}}     alt="img"
                                                            alt="img"></a>
                                                </div>
                                                <div class="lp-post-content">
                                                    <ul class="lp-post-rating list-wrap">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <h4 class="title"><a href="shop-details.html">B-complex Zinc</a>
                                                    </h4>
                                                    <span class="price">$36.00</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="lp-post-thumb">
                                                    <a href="shop-details.html"><img
                                                            src={{url("/mppl/assets/img/Parfume-Asset/image_aig.png")}} 
                                                            alt="img"></a>
                                                            
                                                </div>
                                                <div class="lp-post-content">
                                                    <ul class="lp-post-rating list-wrap">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <h4 class="title"><a href="shop-details.html">Protein Powder</a>
                                                    </h4>
                                                    <span class="price">$19.99</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h4 class="sidebar-title">Product tags</h4>
                                    <ul class="Product-tag-list list-wrap">
                                        <li><a href="shop.html">Bone Support</a></li>
                                        <li><a href="shop.html">Energy Support</a></li>
                                        <li><a href="shop.html">Hair</a></li>
                                        <li><a href="shop.html">Multivitamins</a></li>
                                        <li><a href="shop.html">Pre-Workout</a></li>
                                        <li><a href="shop.html">Protein</a></li>
                                        <li><a href="shop.html">Skin & Nails</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-12 col-sm-8 shop-sidebar-pad order-first">
                            <div class="shop-top-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="shop-top-left">
                                            <p class="woocommerce-result-count shop-show-result">Showing 1-6 of 18
                                                results</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="shop-top-right selection">
                                            <form class="woocommerce-ordering mb-0" method="get">
                                                <select id="shortBy" name="orderby" class="orderby form-select"
                                                    aria-label="Shop order">
                                                    <option value="menu_order" selected="selected">Default sorting
                                                    </option>
                                                    <option value="popularity">Sort by popularity</option>
                                                    <option value="rating">Sort by average rating</option>
                                                    <option value="date">Sort by latest</option>
                                                    <option value="price">Sort by price: low to high</option>
                                                    <option value="price-desc">Sort by price: high to low</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="suxnix-shop-product-main">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="home-shop-item inner-shop-item">
                                            <div class="home-shop-thumb">
                                                <a href="shop-details.html">
                                                    <img src={{url("/mppl/assets/img/Parfume-Asset/image_BEB.png")}} alt="img">
                                                    
                                                    <span class="discount"> -15%</span>
                                                </a>
                                            </div>
                                            <div class="home-shop-content">
                                                <div class="shop-item-cat"><a href="#">Nutrition</a></div>
                                                <h4 class="title"><a href="shop-details.html">Box Full of Muscles</a>
                                                </h4>
                                                <span class="home-shop-price">$85.99</span>
                                                <div class="home-shop-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span class="total-rating">(20)</span>
                                                </div>
                                                <div class="shop-content-bottom">
                                                    <a href="cart.html" class="cart"><i
                                                            class="flaticon-shopping-cart-1"></i></a>
                                                    <a href="shop-details.html" class="btn btn-two">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="home-shop-item inner-shop-item">
                                            <div class="home-shop-thumb">
                                                <a href="shop-details.html">
                                                    <img src={{url("/mppl/assets/img/Parfume-Asset/image_u2l.png")}} alt="img">
                                                    
                                                    
                                                </a>
                                            </div>
                                            <div class="home-shop-content">
                                                <div class="shop-item-cat"><a href="#">Body & Fit</a></div>
                                                <h4 class="title"><a href="shop-details.html">Protein Powder 2kg</a>
                                                </h4>
                                                <span class="home-shop-price">$59.99</span>
                                                <div class="home-shop-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span class="total-rating">(34)</span>
                                                </div>
                                                <div class="shop-content-bottom">
                                                    <a href="cart.html" class="cart"><i
                                                            class="flaticon-shopping-cart-1"></i></a>
                                                    <a href="shop-details.html" class="btn btn-two">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="home-shop-item inner-shop-item">
                                            <div class="home-shop-thumb">
                                                <a href="shop-details.html">
                                                <img src={{url("/mppl/assets/img/Parfume-Asset/image_r3u.png")}} alt="img">
                                                    
                                                    <span class="discount"> -15%</span>
                                                </a>
                                            </div>
                                            <div class="home-shop-content">
                                                <div class="shop-item-cat"><a href="#">Fat Burners</a></div>
                                                <h4 class="title"><a href="shop-details.html">Amino Energy Health
                                                        2kg</a></h4>
                                                <span class="home-shop-price">$29.99</span>
                                                <div class="home-shop-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span class="total-rating">(19)</span>
                                                </div>
                                                <div class="shop-content-bottom">
                                                    <a href="cart.html" class="cart"><i
                                                            class="flaticon-shopping-cart-1"></i></a>
                                                    <a href="shop-details.html" class="btn btn-two">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="home-shop-item inner-shop-item">
                                            <div class="home-shop-thumb">
                                                <a href="shop-details.html">
                                                    <img src={{url("/mppl/assets/img/Parfume-Asset/image_pWI.png")}} alt="img">
                                                    
                                                </a>
                                            </div>
                                            <div class="home-shop-content">
                                                <div class="shop-item-cat"><a href="#">Protein</a></div>
                                                <h4 class="title"><a href="shop-details.html">Antiaging and
                                                        Longevity</a></h4>
                                                <span class="home-shop-price">$49.99</span>
                                                <div class="home-shop-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span class="total-rating">(12)</span>
                                                </div>
                                                <div class="shop-content-bottom">
                                                    <a href="cart.html" class="cart"><i
                                                            class="flaticon-shopping-cart-1"></i></a>
                                                    <a href="shop-details.html" class="btn btn-two">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="home-shop-item inner-shop-item">
                                            <div class="home-shop-thumb">
                                                <a href="shop-details.html">
                                                    <img src={{url("/mppl/assets/img/Parfume-Asset/image_pWI.png")}} alt="img">
                                                   
                                                    <span class="discount"> -45%</span>
                                                </a>
                                            </div>
                                            <div class="home-shop-content">
                                                <div class="shop-item-cat"><a href="#">Fat Burners</a></div>
                                                <h4 class="title"><a href="shop-details.html">SERIOUR MASS 2kg</a></h4>
                                                <span class="home-shop-price">$49.99</span>
                                                <div class="home-shop-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span class="total-rating">(19)</span>
                                                </div>
                                                <div class="shop-content-bottom">
                                                    <a href="cart.html" class="cart"><i
                                                            class="flaticon-shopping-cart-1"></i></a>
                                                    <a href="shop-details.html" class="btn btn-two">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="home-shop-item inner-shop-item">
                                            <div class="home-shop-thumb">
                                                <a href="shop-details.html">
                                                    <img src={{url("/mppl/assets/img/Parfume-Asset/image_GMn.png")}} alt="img">
                                                    
                                                </a>
                                            </div>
                                            <div class="home-shop-content">
                                                <div class="shop-item-cat"><a href="#">Burners</a></div>
                                                <h4 class="title"><a href="shop-details.html">Whey Protein Powder</a>
                                                </h4>
                                                <span class="home-shop-price">$29.99</span>
                                                <div class="home-shop-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span class="total-rating">(29)</span>
                                                </div>
                                                <div class="shop-content-bottom">
                                                    <a href="cart.html" class="cart"><i
                                                            class="flaticon-shopping-cart-1"></i></a>
                                                    <a href="shop-details.html" class="btn btn-two">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination-wrap">
                                    <ul class="list-wrap">
                                        <li class="prv-next">
                                            <a href="shop.html"><i class="fas fa-angle-double-left"></i></a>
                                        </li>
                                        <li><a href="shop.html">1</a></li>
                                        <li><a href="shop.html" class="current">2</a></li>
                                        <li><a href="shop.html">3</a></li>
                                        <li><a href="shop.html">...</a></li>
                                        <li><a href="shop.html">10</a></li>
                                        <li class="prv-right">
                                            <a href="shop.html"><i class="fas fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                                            <a href="index-2.html"><img src={{url("/mppl/assets/img/logo/white_logo.png")}} alt="Logo"></a>
                                            
                                        </div>
                                        <div class="footer-text">
                                            <p>Making beauty especially relating complot especial common questions tend
                                                to recur through posts or queries standards vary orem donor command tei.
                                            </p>
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
                    <img src={{url("/mppl/assets/img/others/footer_shape01.png")}} alt="img" class="wow fadeInLeft"
                    
                        data-wow-delay=".3s" data-wow-duration="1s">
                </div>
                <div class="footer-shape two">
                    <img src={{url("/mppl/assets/img/others/footer_shape02.png")}} class="wow fadeInRight"
                        data-wow-delay=".3s" data-wow-duration="1s">
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
                                <img src={{url("/mppl/assets/img/others/card_img.png")}}" alt="card">
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