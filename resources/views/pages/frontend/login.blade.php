@extends("layouts.frontend")
@section("content")

<!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="breadcrumb-content text-center">
                                <h2 class="title">Login Page</h2>
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item trail-item trail-begin">
                                            <a href="index-2.html"><span>Home</span></a>
                                        </li>
                                        <li class="breadcrumb-item trail-item trail-end"><span>Login</span></li>
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

            <!-- singUp-area -->
            <section class="singUp-area section-py-130">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="singUp-wrap">
                                <h2 class="title">Welcome back!</h2>
                                <p>Hey there! Ready to log in? Just enter your username and password below and you'll be back in action in no time. Let's go!</p>
                                <div class="account__social">
                                    <a href="#" class="account__social-btn">
                                        <img src="assets/img/icons/google.svg" alt="img">
                                        Continue with google
                                    </a>
                                </div>
                                <div class="account__divider">
                                    <span>or</span>
                                </div>
                                <form action="#" class="account__form">
                                    <div class="form-grp">
                                        <label for="email">Email</label>
                                        <input id="email" type="text" placeholder="email">
                                    </div>
                                    <div class="form-grp">
                                        <label for="password">Password</label>
                                        <input id="password" type="text" placeholder="password">
                                    </div>
                                    <div class="account__check">
                                        <div class="account__check-remember">
                                            <input type="checkbox" class="form-check-input" value="" id="terms-check">
                                            <label for="terms-check" class="form-check-label">Remember me</label>
                                        </div>
                                        <div class="account__check-forgot">
                                            <a href="reset-password.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-two btn-sm" style="border-radius: 5px;">Sign In</button>
                                </form>
                                <div class="account__switch">
                                    <p>Don't have an account?<a href="register.html">Sign Up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </section>
            <!-- singUp-area-end -->
        </main>
        @endsection