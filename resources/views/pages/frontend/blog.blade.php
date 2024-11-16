@extends("layouts.frontend")

@section("content")


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
                      > <img src={{url("/mppl/assets/img/Parfume-Asset/blog1.png")}}/>
                    </a>
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
                          img src={{url("/mppl/assets/img/Parfume-Asset/userblog.png")}}
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
                      img src={{url("/mppl/assets/img/Parfume-Asset/blog2.png")}}
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
                            img src={{url("/mppl/assets/img/Parfume-Asset/userblog2.png")}}
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
                      <img
                            img src={{url("/mppl/assets/img/Parfume-Asset/blogslide1.png")}}
                            alt="img"
                          />
                    </div>
                    <div class="slide-post">
                      <img
                            img src={{url("/mppl/assets/img/Parfume-Asset/blogslide2.png")}}
                            alt="img"
                          />
                    </div>
                    <div class="slide-post">
                      <img
                            img src={{url("/mppl/assets/img/Parfume-Asset/blogslide3.png")}}
                            alt="img"
                          />
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
                            img src={{url("/mppl/assets/img/Parfume-Asset/userblog3.png")}}
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
                    data-background={{url("/mppl/assets/img/Parfume-Asset/5.png")}}
                    
                  >
                    <div class="quote-icon">
                      <img src={{url("/mppl/assets/img/icons/blockquote.png")}} />
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
                    data-background={{url("/mppl/assets/img/Parfume-Asset/blog3.png")}}
                    
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
                        <img src={{url("/mppl/assets/img/Parfume-Asset/aboutus.png")}} />
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

@endsection
