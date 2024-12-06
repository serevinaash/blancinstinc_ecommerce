@extends("layouts.frontend")
@section("content")
<body>

<!-- main-area -->
<main class="main-area fix">

    <!-- tg-banner-area -->
    <section class="tg-banner-area banner-bg jarallax parallax-img">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 order-0 order-lg-2">
                    <div class="tg-banner-img text-center wow fadeInRight" data-wow-delay=".6s">
                    <img src={{url("/mppl/assets/img\Parfume-Asset/image_GMn.png")}}/>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="tg-banner-content">
                        <h4 class="sub-title wow fadeInUp" data-wow-delay=".2s">Increased Energy!</h4>
                        <h2 class="title wow fadeInUp" data-wow-delay=".4s">Blend of <br> Fragrance</h2>
                        <p class=" wow fadeInUp" data-wow-delay=".6s">Pada akhirnya ini bukan hanya soal aroma, tapi juga soal mengingatkan akan sumber kekuatan dalam diri sendiri mengajak untuk
                        </p>
                        <div class="tg-banner-btn wow fadeInUp" data-wow-delay=".8s">
                            <a href="{{route ("shopDetails")}}" class="tg-btn">purchase now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- tg-features-area -->
    <section class="tg-features-area">
        <div class="container">
            <div class="tg-features-inner">
                <div class="row justify-content-center">
                    <!-- Parfum Wanita -->
                    <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay=".2s">
                        <div class="tg-features-item">
                            <div class="tg-features-icon">
                                <i class="flaticon-supplement"></i>
                            </div>
                            <div class="tg-features-content">
                                <h4 class="title">Parfum Wanita</h4>
                                <p>Parfum dengan aroma lembut dan elegan, dirancang khusus untuk wanita modern.</p>
                                <a href="contact.html">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Parfum Pria -->
                    <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay=".4s">
                        <div class="tg-features-item">
                            <div class="tg-features-icon">
                                <i class="flaticon-whey-protein-3"></i>
                            </div>
                            <div class="tg-features-content">
                                <h4 class="title">Parfum Pria</h4>
                                <p>Parfum maskulin dengan aroma segar dan berkarakter, cocok untuk pria aktif.</p>
                                <a href="contact.html">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Parfum Unisex -->
                    <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay=".6s">
                        <div class="tg-features-item">
                            <div class="tg-features-icon">
                                <i class="flaticon-strong-1"></i>
                            </div>
                            <div class="tg-features-content">
                                <h4 class="title">Parfum Unisex</h4>
                                <p>Parfum dengan aroma netral yang dapat digunakan oleh pria maupun wanita.</p>
                                <a href="contact.html">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- tg-features-area-end -->

    <!-- supplement-area -->
    <section id="ingredient" class="tg-supplement-area pt-130 pb-120">
        <div class="tg-supplement-bg"></div>
        <div class="container">
            <div class="tg-supplement-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 order-0 order-lg-2">
                        <div class="tg-supplement-img text-end  wow fadeInRight" data-wow-delay=".2s">
                            <img src=" {{ url('/mppl/assets/img/others/supplement_img.png') }}" alt="">

                        </div>
                        <div class="tg-supplement-shape">
                            <img src=" {{ url('/mppl/assets/img/others/supplement_shape02.png') }}" alt="" class="rotateme">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tg-supplement-content mt-60 wow fadeInLeft" data-wow-delay=".2s">
                            <div class="tg-section-title mb-25">
                                <span class="sub-title">ingredients</span>
                                <h2 class="title">growth promoter <br> supplement</h2>
                            </div>
                            <p>Vitamin Ipsum is simply dummy text of the printing and tysetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley.</p>
                            <a href="{{route ("shop")}}" class="tg-btn view-btn">VIEW more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- supplement-area-end -->

    <!-- video-area -->
    <section class="tg-video-area tg-video-bg jarallax parallax-img">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!-- Gambar Shopee -->
                <div class="col-xl-7 col-lg-8">
                    <div class="tg-video-img wow fadeInLeft" data-wow-delay=".2s">
                        <img src="{{url("/mppl/assets/img/Parfume-Asset/Shoppe.PNG")}}" alt="Visit us on Shopee">
                    </div>

                </div>
                <!-- Konten Promosi -->
                <div class="col-xl-5 col-lg-8">
                    <div class="tg-video-content wow fadeInRight" data-wow-delay=".2s">
                        <div class="tg-section-title white mb-30">
                            <span class="sub-title">Promosi Eksklusif</span>
                            <h2 class="title white-text">Kunjungi Toko Kami di Shopee!</h2>
                        </div>
                        <p class="info-one">Dapatkan berbagai pilihan parfum berkualitas dengan penawaran terbaik hanya di Shopee. Tersedia untuk pria, wanita, dan unisex.</p>
                        <p class="info-two">Belanja mudah, aman, dan hemat dengan promo eksklusif setiap hari. Temukan parfum favorit Anda sekarang juga!</p>
                        <a href="https://shopee.co.id/blancinstinc?entryPoint=ShopBySearch&searchKeyword=blancinstinc" class="tg-btn">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- video-area-end -->

    <!-- tg-shop-area -->
    <section id="supplement" class="tg-shop-area pt-100 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tg-section-title text-center mb-60">
                        <span class="sub-title">RECENT PRODUCTS</span>
                        <h2 class="title">PRODUCT</h2>
                    </div>
                </div>
            </div>

            <div class="tg-shop-wrapper">
    <div class="row justify-content-center">
        @foreach($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="tg-shop-item text-center">
                    <div class="tg-shop-thumb">
                    <a href="{{ route('details', $product->slug) }}">
                        <span class="new">New</span>
                        <a href="shop-details.html"><img src="{{ $product->galleries()->exists() ? Storage::url($product->galleries->first()->url) : 'placeholder_image_url' }}" alt="{{ $product->name }}"/></a>

                        <div class="tg-shop-action">
                            <a href="shop-details.html" class="action-item"><i class="far fa-heart"></i></a>
                            <a href="{{ route('details', $product->slug) }}" class="action-item"><i class="flaticon-shopping-cart-1"></i></a>
                            <a href="shop-details.html" class="action-item"><i class="flaticon-search"></i></a>
                        </div>
                    </div>
                    <div class="tg-shop-content">
                        <div class="tg-shop-cat">
                            <a href="{{ route('details', $product->slug) }}"></a>
                        </div>
                        <h4 class="title"><a href="shop-details.html">{{ $product->name }}</a></h4>
                        <div class="tg-shop-price">IDR {{ number_format($product->price) }}</div>
                    </div>
                </div>
            </div>
            </a>
        @endforeach
    </div>
</div>

        </div>
    </section>
    <!-- tg-shop-area-end -->



    <!-- pricing-area -->
    <section class="tg-pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="tg-section-title text-center mb-55">
                        <p class="sub-title">BlancInstinc Plans</p>
                        <h2 class="title">SUPPLEMENT PACKAGES</h2>
                    </div>
                </div>
            </div>
            <div class="pricing-wrap">
                <div class="row align-items-end justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="pricing-item mb-30 regular wow fadeInUp" data-wow-delay=".2s">
                            <div class="pricing__box text-center">
                                <div class="pricing-hade">
                                    <span>1 Parfume Bottle of</span>
                                    <h3 class="title">BlancInstinc</h3>
                                    <p>(1 x 250 veggie caps bottle)</p>
                                </div>
                                <div class="pricing-img">
                                    <img src={{url("/mppl/assets/img/Parfume-Asset/Parfume-Bundle(1).png")}}/ alt="img">
                                </div>
                                <div class="pricing-price">
                                    <h4 class="price">$69</h4>
                                    <span>per <br> bottle</span>
                                </div>
                                <h5 class="total">($69 TOTAL)</h5>
                                <div class="price-savings">
                                    <h4 class="save">Save 14%</h4>
                                    <span>&nbsp;</span>
                                </div>
                                <div class="pricing-btn mb-15">
                                    <a href="contact.html">Buy Now <span>365 Day Full Money Back Guaranteed</span></a>
                                </div>
                                <div class="bottom-img">
                                    <img src={{url("/mppl/assets/img/others/pricing_bottom_img.png")}}/ alt="card">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="pricing-item mb-30 popular-plan wow fadeInUp" data-wow-delay=".4s">
                            <div class="pricing-title text-center mb-10">
                                <h4 class="title">★ Most Popular ★</h4>
                            </div>
                            <div class="pricing__box text-center">
                                <div class="pricing-hade">
                                    <span>2 Parfume Bottles of</span>
                                    <h3 class="title">BlancInstinc</h3>
                                    <p>(3 x 250 veggie caps bottle)</p>
                                </div>
                                <div class="pricing-img">
                                    <img src={{url("/mppl/assets/img/Parfume-Asset/Parfume-Bundle(3).png")}}/ alt="img">
                                </div>
                                <div class="pricing-price">
                                    <h4 class="price">$59</h4>
                                    <span>per <br> bottle</span>
                                </div>
                                <h5 class="total">($179 TOTAL)</h5>
                                <div class="price-savings">
                                    <h4 class="save">Save 25%</h4>
                                    <span>+ Free Shipping</span>
                                </div>
                                <div class="pricing-btn mb-15">
                                    <a href="contact.html">Buy Now <span>365 Day Full Money Back Guaranteed</span></a>
                                </div>
                                <div class="bottom-img">
                                    <img src={{url("/mppl/assets/img/others/pricing_bottom_img.png")}}/ alt="card">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="pricing-item mb-30 best-value-plan wow fadeInUp" data-wow-delay=".6s">
                            <div class="pricing-title text-center mb-10">
                                <h4 class="title">✓ Best Value</h4>
                            </div>
                            <div class="pricing__box text-center">
                                <div class="pricing-hade">
                                    <span>3 Parfume Bottles of</span>
                                    <h3 class="title">BlancInstinc</h3>
                                    <p>(6 x 250 veggie caps bottle)</p>
                                </div>
                                <div class="pricing-img">
                                    <img src={{url("/mppl/assets/img/Parfume-Asset/Parfume-Bundle(2).png")}}/ alt="img">
                                </div>
                                <div class="pricing-price">
                                    <h4 class="price">$49</h4>
                                    <span>per <br> bottle</span>
                                </div>
                                <h5 class="total">($299 TOTAL)</h5>
                                <div class="price-savings">
                                    <h4 class="save">Save 40%</h4>
                                    <span>+ Free Shipping</span>
                                </div>
                                <div class="pricing-btn mb-15">
                                    <a href="contact.html">Buy Now <span>365 Day Full Money Back Guaranteed</span></a>
                                </div>
                                <div class="bottom-img">
                                    <img src={{url("/mppl/assets/img/others/pricing_bottom_img.png")}}/ alt="card">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-area-end -->

    <!-- testimonial-area -->
    <section class="tg-testimonial-area tg-testimonial-bg jarallax parallax-img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tg-section-title white text-center mb-60">
                        <span class="sub-title">recommend artist</span>
                        <h2 class="title white-text">recommended by artist</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-10 col-xl-11">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tg-testimonial-item">
                                <div class="tg-testimonial-thumb">
                                    <img src={{url("/mppl/assets/img/others/testi_img01.jpg")}}/ alt="">
                                </div>
                                <div class="tg-testimonial-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h2 class="title">I Use it Everyday</h2>
                                    <p>Reference about Lorem Ipsums giving information origins</p>
                                    <p class="tg-testi-avatar-info">Dr.Jon Smith . <span>2 hours ago</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tg-testimonial-item">
                                <div class="tg-testimonial-thumb">
                                <img src={{url("/mppl/assets/img/others/testi_img02.jpg")}}/ alt="">
                                </div>
                                <div class="tg-testimonial-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h2 class="title">100% Organic Products</h2>
                                    <p>Reference about Lorem Ipsums giving information origins</p>
                                    <p class="tg-testi-avatar-info">Dr.Jon Smith . <span>2 hours ago</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tg-testimonial-item">
                                <div class="tg-testimonial-thumb">
                                <img src={{url("/mppl/assets/img/others/testi_img02.jpg")}}/ alt="">
                                </div>
                                <div class="tg-testimonial-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h2 class="title">100% Organic Products</h2>
                                    <p>Reference about Lorem Ipsums giving information origins</p>
                                    <p class="tg-testi-avatar-info">Dr.Jon Smith . <span>2 hours ago</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tg-testimonial-item">
                                <div class="tg-testimonial-thumb">
                                <img src={{url("/mppl/assets/img/others/testi_img01.jpg")}}/ alt="">
                                </div>
                                <div class="tg-testimonial-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h2 class="title">I Use it Everyday</h2>
                                    <p>Reference about Lorem Ipsums giving information origins</p>
                                    <p class="tg-testi-avatar-info">Dr.Jon Smith . <span>2 hours ago</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->



</main>
<!-- main-area-end -->

</body>
@endsection
