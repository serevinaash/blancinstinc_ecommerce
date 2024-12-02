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
                                            <img src={{url("/mppl/assets\img\Parfume-Asset\TRANSPARANTType2.png")}} alt="lpgoo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-xl-flex">
                                        <ul class="navigation">
                                          <li class="active menu-item-has-children"><a href={{route ("index") }} class="section-link {{ \Route::current()->getName() === 'index' ? 'md:text-black' : 'md:text-black' }} ">Home</a>
                                            </li>
                                            <li><a href={{route ("blog") }} class="section-link  {{ \Route::current()->getName() === 'blog' ? 'md:text-black' : 'md:text-black' }} ">Blog</a></li>
                                            <li class="menu-item-has-children"><a href={{route ("shop")}} class="section-link">Shop</a>
                                      <ul class="sub-menu">
                                                    <li><a href={{route ("shop")}} >Our Shop</a></li>
                                                    <li><a href={{route ("cart")}}>Cart Page</a></li>
                                                    <li><a href={{route ("cart")}}>Checkout Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href={{route ("contact")}}>Contacts</a></li>

                                                                            <!-- Logout link -->
                                                                            @auth
                                                                            <li>
                                                                                <a href="{{ route('logout') }}" class="section-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                                    Logout
                                                                                </a>
                                                                            </li>
                                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                                                                @csrf
                                                                            </form>
                                                                        @endauth
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                                @csrf
                                            </form>
                                            @auth
                                            @if(Auth::user()->roles == "ADMIN")
                                            <li class="mx-3 py-6 md:py-0">
                                              <a href="{{route("dashboard.index")}}" class="section-link {{\Route::current()->getName() === "index" ? "md:text-white" : "md:text-black"}} hover:underline">Dashboard</a>
                                            </li>
                                            @endif
                                          @endauth
                                            @guest
                                            <li><a href={{route ("login")}} class="section-link {{\Route::current()->getName() === "index" ? "md:text-black" : "md:text-black"}}">Login</a></li>
                                            <li><a href={{route ("register")}} class="section-link  {{\Route::current()->getName() === "index" ? "md:text-black" : "md:text-black"}}">Register</a></li>
                                            @endguest

                                        </ul>
                                    </div>
                                    <div class="header-btn d-none d-sm-block">
                                        <a href={{route ("login")}} class="tg-btn">Order Now</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
