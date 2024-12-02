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
                                    <h4 class="sidebar-title">CATEGORIES</h4>
                                    <ul class="categories-list list-wrap">
                                        <li><a href="shop.html">Parfum & Wewangian Wanita <i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                        <li><a href="shop.html">Parfum & Wewangian
                                            pria <i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                        <li><a href="shop.html">Parfum & Wewangian
                                            Unisex<i class="fas fa-angle-double-right"></i></a>
                                        </li>
                                        <li><a href="shop.html">Pengharum Ruangan <i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                        <li><a href="shop.html">Parfum Mobil <i
                                                    class="fas fa-angle-double-right"></i></a></li>
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
                                @foreach($products as $product)
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="home-shop-item inner-shop-item">
                                            <div class="home-shop-thumb">
                                                <a href="shop-details.html">
                                                    <img src="{{ $product->galleries()->exists() ? Storage::url($product->galleries->first()->url) : 'placeholder_image_url' }}" alt="{{ $product->name }}">

                                                    <span class="discount"> -15%</span>
                                                </a>
                                            </div>
                                            <div class="home-shop-content">
                                                <div class="shop-item-cat"><a href="#">Nutrition</a></div>
                                                <h4 class="title"><a href="shop-details.html">{{ $product->name }}</a>
                                                </h4>
                                                <span class="home-shop-price">IDR  {{ number_format($product->price) }}</span>
                                                <div class="home-shop-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span class="total-rating">(20)</span>
                                                </div>
                                                <div class="shop-content-bottom">
                                                    <a href="{{ route('cart') }}" class="cart"><i
                                                            class="flaticon-shopping-cart-1"></i></a>
                                                    <a href="{{ route('details', $product->slug) }}" class="btn btn-two">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach



        </main>
        <!-- main-area-end -->



        @endsection
