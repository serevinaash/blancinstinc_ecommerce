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
                            <h2 class="title">Shop Details</h2>
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item trail-item trail-begin">
                                        <a href="index-2.html"><span>Home</span></a>
                                    </li>
                                    <li class="breadcrumb-item trail-item trail-end"><span>Shop Details</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
                </section>
        <!-- breadcrumb-area-end -->

        <!-- shop-details-area -->
        <section class="inner-shop-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="inner-shop-details-flex-wrap">
                            <div class="inner-shop-details-img-wrap">
                                @foreach($product->galleries as $item)
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane show active {{$loop->first ? "selected" : ""}}"
                data-img="{{Storage::url($item->url)}}" id="item-one" role="tabpanel" aria-labelledby="item-one-tab">
                                        <div class="inner-shop-details-img">
                                            <img src="{{$product->galleries()->exists() ? Storage::url($product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}" alt="img">
                                        </div>
                                    </div>


                                </div>
                            </div>
                            @endforeach
                            <div class="inner-shop-details-nav-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <li class="nav-item" role="presentation">
                                        <a href="#" class="nav-link" id="item-two-tab" data-bs-toggle="tab" data-bs-target="#item-two" role="tab"
                                        aria-controls="item-two" aria-selected="false"><img src="assets/img/Parfume-Asset/image_GMn.png" alt="">
                                    </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#" class="nav-link" id="item-three-tab" data-bs-toggle="tab" data-bs-target="#item-three" role="tab"
                                        aria-controls="item-three" aria-selected="false"><img src="assets/img/Parfume-Asset/image_BGa.png" alt="">

                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#" class="nav-link" id="item-four-tab" data-bs-toggle="tab" data-bs-target="#item-four" role="tab" aria-controls="item-four" aria-selected="false"><img src="assets/img/Parfume-Asset/image_omR.png" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="inner-shop-details-content">
                            <h4 class="title">{{$product->name}}</h4>
                            <div class="inner-shop-details-meta">
                                <ul class="list-wrap">
                                    <li>Brands : <a href="shop.html">Blancinstinc</a></li>
                                    <li class="inner-shop-details-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span>(4.9)</span>
                                    </li>

                                </ul>
                            </div>
                            <div class="inner-shop-details-price">
                                <h2 class="price">IDR {{number_format($product->price)}}</h2>
                                <h5 class="stock-status">- IN Stock</h5>
                            </div>
                            <p>𝗕𝗹𝗮𝗻𝗰 𝗜𝗻𝘀𝘁𝗶𝗻𝗰 memiliki makna dan arti (𝗕𝗹𝗲𝗻𝗱 𝐨𝐟 𝗙𝗿𝗮𝗴𝗿𝗮𝗻𝗰𝗲𝘀 𝗜𝗻𝘀𝗽𝗶𝗿𝗲𝗱 𝗯𝘆 𝗜𝗻𝘁𝗶𝗻𝗰) yang artinya "𝗺𝗲𝗻𝗰𝗮𝗺𝗽𝘂𝗿𝗸𝗮𝗻 𝗯𝗲𝗿𝗯𝗮𝗴𝗮𝗶 𝘄𝗲𝘄𝗮𝗻𝗴𝗶𝗮𝗻 𝘁𝗲𝗿𝗶𝗻𝘀𝗽𝗶𝗿𝗮𝘀𝗶 𝗱𝗮𝗿𝗶 𝗻𝗮𝗹𝘂𝗿𝗶", lalu di rancang seperti parfum inspired dari berbagai brands ternama.
                                kami pun memberi opsi kepada anda berbagai kualitas aroma rasa original dengan harga yang sangat terjangkau dan pastinya bisa menemani hari anda dengan aroma yang kalian inginkan dengan konsentrasi pure fragrance tinggi (𝐄𝐱𝐭𝐫𝐚𝐢𝐭 𝐃𝐞 𝐏𝐚𝐫𝐟𝐮𝐦).</p>
                            <div class="inner-shop-details-list">

                            </div>
                            <div class="inner-shop-perched-info">
                                <div class="sd-cart-wrap">
                                    <form action="#">
                                        <div class="quickview-cart-plus-minus">
                                            <input type="text" value="1">
                                        </div>
                                    </form>
                                </div>
                                @if(isset($product->id))
                                <form action="{{ route('cart-add', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="cart-btn">Add to Cart</button>
                                </form>
                                <a href="shop-details.html" class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </a>
                            @else
                                <p>Product not found</p>
                            @endif


                            </div>
                            <div class="inner-shop-details-bottom">
                                <span><span>Tag : <a href="#">pengharum</a></span></span>
                                <span>
                                    <span>Categories :
                                        <a href="#">Parfum</a>
                                        <a href="#">Blancinstinc</a>
                                        <a href="#">Wanita</a>
                                        <a href="#">Pria</a></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-desc-wrap">
                            <ul class="nav nav-tabs" id="myTabTwo" role="tablist">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                        data-bs-target="#description" role="tab" aria-controls="description"
                                        aria-selected="true">Description</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="review-tab" data-bs-toggle="tab"
                                        data-bs-target="#review" role="tab" aria-controls="review"
                                        aria-selected="false">Reviews (3)</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContentTwo">
                                <div class="tab-pane fade show active" id="description" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <div class="product-desc-content">
                                        {!! $product->description !!}
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="product-desc-content">
                                        <div class="reviews-comment">
                                            <div class="review-info">
                                                <div class="review-img">
                                                    <img src="assets/img/others/p_review_img01.jpg" alt="">
                                                </div>
                                                <div class="review-content">
                                                    <ul class="review-rating list-wrap">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="review-meta">
                                                        <h6>Chenai Simon <span>-May 12, 2024</span></h6>
                                                    </div>
                                                    <p>There are many variations of passages of lorem ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour, or randomised words which don’t look even
                                                        slightly believable. If you are going to use a passage of lorem
                                                        ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-info">
                                                <div class="review-img">
                                                    <img src="assets/img/others/p_review_img02.jpg" alt="">
                                                </div>
                                                <div class="review-content">
                                                    <ul class="review-rating list-wrap">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="review-meta">
                                                        <h6>Finn Castaneda <span>-June 17, 2024</span></h6>
                                                    </div>
                                                    <p>There are many variations of passages of lorem ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour, or randomised words which don’t look even
                                                        slightly believable. If you are going to use a passage of lorem
                                                        ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-info">
                                                <div class="review-img">
                                                    <img src="assets/img/others/p_review_img03.jpg" alt="">
                                                </div>
                                                <div class="review-content">
                                                    <ul class="review-rating list-wrap">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="review-meta">
                                                        <h6>Bayley Robertson <span>-May 28, 2024</span></h6>
                                                    </div>
                                                    <p>There are many variations of passages of lorem ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour, or randomised words which don’t look even
                                                        slightly believable. If you are going to use a passage of lorem
                                                        ipsum.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-details-area-end -->
<!-- START: RELATED PRODUCTS -->
<div class="related-products-area pb-120">
    <div class="container">
        <div class="related-products-wrap">
            <h2 class="title">Related Products</h2>
            <div class="row related-product-active">
                @foreach($recommendations as $recommendation)
                <div class="col-xl-3">
                    <div class="home-shop-item">
                        <div class="home-shop-thumb">
                            <a href="{{ route('details', $recommendation->slug) }}">
                                <img src="{{ $recommendation->galleries()->exists() ? Storage::url($recommendation->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}" alt="Product Image">
                                <span class="discount">-15%</span>
                            </a>
                            <div class="shop-thumb-shape"></div>
                        </div>
                        <div class="home-shop-content">
                            <h4 class="title">
                                <a href="{{ route('details', $recommendation->slug) }}">{{ $recommendation->name }}</a>
                            </h4>
                            <span class="home-shop-price">IDR {{ number_format($recommendation->price) }}</span>
                            <div class="home-shop-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="total-rating">(30)</span>
                            </div>
                            <div class="shop-content-bottom">
                                <a href="cart.html" class="cart"><i class="flaticon-shopping-cart-1"></i></a>
                                <a href="{{ route('details', $recommendation->slug) }}" class="btn btn-two">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- END: RELATED PRODUCTS -->
@endsection

