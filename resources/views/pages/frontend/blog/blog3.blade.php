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
                                  <a href="index-2.html#shop" class="tg-btn">Order Now</a>
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
                <h2 class="title">Our Blog</h2>
                <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item trail-item trail-begin">
                      <a href="index-2.html"><span>Home</span></a>
                    </li>
                    <li class="breadcrumb-item trail-item trail-end">
                      <span>Our Blog</span>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="video-shape one">
          <img src="assets/img/others/video_shape01.png" alt="shape" />
        </div>
        <div class="video-shape two">
          <img src="assets/img/others/video_shape02.png" alt="shape" />
        </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- blog-area -->
      <section class="blog-area pt-120 pb-120">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="blog--post--item mb-40">
                <div class="blog--post--thumb">
                  <a href="blog-details.html"
                    ><img src="assets/img/Parfume-Asset/blog1.png" alt="img"
                  /></a>
                </div>
                <div class="blog--post--content">
                  <div class="blog--tag">
                    <a href="#">Business</a>
                  </div>
                  <h2 class="blog--post--title">
                    <a href="blog-details.html"
                      >"How to Choose a Perfume That Matches Your Personality"
                    </a>
                  </h2>
                  <div class="blog--post--meta mb-20">
                    <ul class="list-wrap">
                      <li>
                        <span><i class="far fa-eye"></i>1.6k Views</span>
                      </li>
                      
                      <li>
                        <span
                          ><i class="far fa-calendar-alt"></i>16th Sept
                          2024</span
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="post-text">
                    <p>
                      Perfume is more than just a scent; it's a reflection of
                      your identity. In this post, we dive into how different
                      fragrance families, from floral to woody, can match
                      different personality types. Whether you're adventurous,
                      romantic, or laid-back, we'll guide you through choosing a
                      scent that truly represents who you are. Explore how to
                      find your signature fragrance that speaks to your unique
                      character and style.
                    </p>
                  </div>
                  <div class="blog--post--bottom">
                    <div class="blog--post--avatar">
                      <div class="blog--avatar--img">
                        <img
                          src="assets/img/Parfume-Asset/userblog.png"
                          alt="img"
                        />
                      </div>
                      <div class="blog--avatar--info">
                        <p>by <a href="#">shafadeascr</a></p>
                      </div>
                    </div>
                    <div class="blog--read--more">
                      <a href="blog-details.html"
                        ><i class="fas fa-arrow-right"></i>Read More</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="blog--post--item mb-40">
                <div class="blog--post--thumb position-relative">
                  <a href="blog-details.html"
                    ><img
                      src="assets/img/Parfume-Asset/blog2.png"
                      alt="img"
                  /></a>
                  <a
                    href="https://youtu.be/89pmuGq0EaA?si=WFry5DcYXggThnVA"
                    class="video--icon popup-video"
                  >
                    <i class="fas fa-play"></i
                  ></a>
                </div>
                <div class="blog--post--content">
                  <div class="blog--tag">
                    <a href="#">Business</a>
                  </div>
                  <h2 class="blog--post--title">
                    <a href="blog-details.html"
                      >"Fragrance Trends of 2024: What’s New in the World of
                      Perfumes"</a
                    >
                  </h2>
                  <div class="blog--post--meta mb-20">
                    <ul class="list-wrap">
                      <li>
                        <span><i class="far fa-eye"></i>1.1k Views</span>
                      </li>
                      
                      <li>
                        <span
                          ><i class="far fa-calendar-alt"></i>24th July
                          2024</span
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="post-text">
                    <p>
                      Stay ahead of the curve with the latest trends in the
                      perfume industry. This post highlights the hottest
                      fragrances making waves this year, from bold new releases
                      to timeless classics making a comeback. We'll take a look
                      at emerging scent profiles, popular celebrity
                      collaborations, and innovative new ingredients. Whether
                      you're looking to refresh your collection or stay on top
                      of trends, this guide has you covered with the must-have
                      perfumes of the season.
                    </p>
                  </div>
                  <div class="blog--post--bottom">
                    <div class="blog--post--avatar">
                      <div class="blog--avatar--img">
                        <img
                          src="assets/img/Parfume-Asset/userblog2.png"
                          alt="img"
                        />
                      </div>
                      <div class="blog--avatar--info">
                        <p>by <a href="#">_nfzmhn</a></p>
                      </div>
                    </div>
                    <div class="blog--read--more">
                      <a href="blog-details.html"
                        ><i class="fas fa-arrow-right"></i>Read More</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="blog--post--item mb-40">
                <div class="blog--post--thumb blog-thumb-active">
                  <div class="slide-post">
                    <img src="assets/img/Parfume-Asset/blogslide1.png" alt="" />
                  </div>
                  <div class="slide-post">
                    <img src="assets/img/Parfume-Asset/blogslide2.png" alt="" />
                  </div>
                  <div class="slide-post">
                    <img src="assets/img/Parfume-Asset/blogslide3.png" alt="" />
                  </div>
                </div>
                <div class="blog--post--content">
                  <div class="blog--tag">
                    <a href="#">Business</a>
                  </div>
                  <h2 class="blog--post--title">
                    <a href="blog-details.html"
                      >"The Ultimate Guide to Layering Perfumes: Create Your
                      Signature Scent"</a
                    >
                  </h2>
                  <div class="blog--post--meta mb-20">
                    <ul class="list-wrap">
                      <li>
                        <span><i class="far fa-eye"></i>800 Views</span>
                      </li>
                      
                      <li>
                        <span
                          ><i class="far fa-calendar-alt"></i>19th July
                          2024</span
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="post-text">
                    <p>
                      Have you ever wanted to create a perfume that's truly your
                      own? This blog post will walk you through the art of
                      fragrance layering, a technique used by many perfume
                      enthusiasts to build custom scents. We'll explore how to
                      mix and match different perfume notes to enhance your
                      scent’s complexity and make it last longer. Discover the
                      dos and don'ts of perfume layering and get ready to
                      experiment with your collection.
                    </p>
                  </div>
                  <div class="blog--post--bottom">
                    <div class="blog--post--avatar">
                      <div class="blog--avatar--img">
                        <img
                          src="assets/img/Parfume-Asset/userblog3.png"
                          alt="img"
                        />
                      </div>
                      <div class="blog--avatar--info">
                        <p>by <a href="#">serevinash</a></p>
                      </div>
                    </div>
                    <div class="blog--read--more">
                      <a href="blog-details.html"
                        ><i class="fas fa-arrow-right"></i>Read More</a
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="blog--post--item mb-40">
                <div
                  class="blog--post--content quote-post"
                  data-background="assets/img/Parfume-Asset/5.png"
                >
                  <div class="quote-icon">
                    <img src="assets/img/icons/blockquote.png" alt="" />
                  </div>
                  <div class="fix">
                    <h2 class="blog--post--title">
                      
                        Blanc Instinc: Where Elegance Meets Intuition
                      >
                    </h2>
                    <div class="blog--post--meta"></div>
                  </div>
                </div>
              </div>
              <div class="blog--post--item mb-40">
                <div
                  class="blog--post--content post-bg"
                  data-background="assets/img/Parfume-Asset/blog3.png"
                >
                  
                  <h2 class="blog--post--title">
                    
                      Discover the Essence of Elegance: Blanc Instinc
                      Perfumes
                    
                  </h2>
              
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-7">
              <aside class="blog-sidebar pl-20">
                <div class="widget mb-40">
                  <div class="sidebar-title mb-25">
                    <h3 class="title">About Us</h3>
                  </div>
                  <div class="blog-about text-center">
                    <div class="blog-avatar-img mb-25">
                      <img src="assets/img/Parfume-Asset/aboutus.png" alt="img" />
                    </div>
                    <div class="b-about-content mb-20">
                      <h4>BlancInstinc</h4>
                      <p>
                        Blanc Instinc is a luxury perfume brand, offering elegant and unique scents that reflect your personal style.
                      </p>
                    </div>
                    <div class="b-about-social">
                      <a href="http://instagram.com/blancinstinc"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>
      <!-- blog-area-end -->
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
                      <a href="index-2.html"
                        ><img src="assets/img\Parfume-Asset/TRANSPARANT Type 1.png" alt="Logo">
                      </a>
                    </div>
                    <div class="footer-text">
                      <p>
                        Making beauty especially relating complot especial
                        common questions tend to recur through posts or queries
                        standards vary orem donor command tei.
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
                      <li class="phone">
                        <i class="fas fa-phone"></i> +62 858-4673-7274

                      </li>
                      <li class="mail">
                        <i class="fas fa-envelope"></i> Suxnix@example.com
                      </li>
                      <li class="website">
                        <i class="fas fa-globe"></i> www.suxnixdomain.com
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-shape one">
          <img
            src="assets/img/others/footer_shape01.png"
            alt="img"
            class="wow fadeInLeft"
            data-wow-delay=".3s"
            data-wow-duration="1s"
          />
        </div>
        <div class="footer-shape two">
          <img
            src="assets/img/others/footer_shape02.png"
            alt="img"
            class="wow fadeInRight"
            data-wow-delay=".3s"
            data-wow-duration="1s"
          />
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
                <img src="assets/img/others/card_img.png" alt="card" />
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
