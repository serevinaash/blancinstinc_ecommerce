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
                                <h2 class="title">Contact Us</h2>
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item trail-item trail-begin">
                                            <a href="index-2.html"><span>Home</span></a>
                                        </li>
                                        <li class="breadcrumb-item trail-item trail-end"><span>Contact Us</span></li>
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

            <!-- contact-area -->
            <section class="contact-area">
                <div class="container">
                    <div class="contact-box-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="contact-box">
                                    <div class="contact-icon">
                                        <span class="overlay-icon"><i class="fas fa-check"></i></span>
                                        <i class="far fa-map"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h5 class="title">Office Address</h5>
                                        <p class="contact-desc">Jl. A.H. Nasution No.105, Cipadung Wetan, Kec. Cibiru, Kota Bandung, Jawa Barat 40614</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="contact-box">
                                    <div class="contact-icon">
                                        <span class="overlay-icon"><i class="fas fa-check"></i></span>
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h5 class="title">Phone Number</h5>
                                        <p class="contact-desc">+62 858-4673-7274<br> +62 877-4437-4332</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="contact-box">
                                    <div class="contact-icon">
                                        <span class="overlay-icon"><i class="fas fa-check"></i></span>
                                        <i class="fas fa-globe"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h5 class="title">Web Connect</h5>
                                        <p class="contact-desc">info@suxnixmail.com <br> suxnixexample.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

            <!-- contact-form-end -->
            <section class="contact-form-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div id="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63370.56487527478!2d107.64153864863282!3d-6.931143600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c302db3434f5%3A0xdf4aacdb8618199c!2sSunan%20Gunung%20Djati%20State%20Islamic%20University%20Bandung!5e0!3m2!1sen!2sid!4v1729483177837!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form-wrap">
                                <div class="section-title mb-50">
                                    <p class="sub-title">Ask Us Anything!</p>
                                    <h2 class="title">Anything you want to know?<br> Ask away!</h2>
                                </div>
                                <form id="contact-form" action="inc/contact.php" class="contact-form" data-toggle="validator">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="full-name">Full Name</label>
                                                <input type="text" id="full-name" placeholder="Enter here" required="required" data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="email">Email Address</label>
                                                <input type="email" id="email" placeholder="Enter here" required="required" data-error="Email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected disabled>Select Subject</option>
                                        <option value="1">Delivery & Orders</option>
                                        <option value="2">Diet & Exercise</option>
                                        <option value="3">Marketing & Press</option>
                                        <option value="4">Share Your Success</option>
                                        <option value="5">Wholesale And Returns</option>
                                        <option value="6">Other</option>

                                    </select>
                                    <div class="form-grp">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" placeholder="Enter here" required="required" data-error="Message is required."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-btn">
                                        <button type="submit" class="btn">make request</button>
                                    </div>
                                    <div class="messages"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-form-area-end -->

        </main>
        <!-- main-area-end -->






@endsection
