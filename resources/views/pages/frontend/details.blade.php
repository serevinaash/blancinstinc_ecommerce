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
    <div class="video-shape one"><img src="assets/img/others/video_shape01.png" alt="shape"></div>
    <div class="video-shape two"><img src="assets/img/others/video_shape02.png" alt="shape"></div>
</section>
<!-- breadcrumb-area-end -->

<!-- shop-details-area -->
<section class="inner-shop-details-area">
    <div class="container">
        <div class="row">
            <!-- Bagian Gambar Produk -->
            <div class="col-lg-6">
                <div class="inner-shop-details-flex-wrap">
                    <div class="inner-shop-details-img-wrap">
                        <div class="tab-content" id="myTabContent">
                        @foreach($product->galleries as $item)
                            <div class="tab-pane {{$loop->first ? 'show active' : ''}}" id="item-{{$loop->index}}" role="tabpanel" aria-labelledby="item-{{$loop->index}}-tab">
                                <div class="inner-shop-details-img">
                                    <img src="{{Storage::url($item->url)}}" alt="Product Image" class="object-cover w-full h-full rounded-lg">
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <!-- Bagian Detail Produk -->
            <div class="col-lg-6">
                <div class="inner-shop-details-content">
                    <!-- Nama Produk -->
                    <h4 class="title">{{$product->name}}</h4>

                    <!-- Harga dan Status Stok -->
                    <div class="inner-shop-details-price">
                        <h2 class="price">IDR {{number_format($product->price)}}</h2>
                        <h5 class="stock-status">- IN Stock</h5>
                    </div>

                    <!-- Rating Produk -->
                    <div class="inner-shop-details-meta">
                        <ul class="list-wrap">
                            <li>ID : <span>QZX8VGH</span></li>
                            <li class="inner-shop-details-review">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>(4.5)</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Deskripsi Produk -->
                    <p class="text-xl leading-7 mb-6">{!! $product->description !!}</p>



                    <!-- Tombol Add to Cart -->
                    <div class="inner-shop-perched-info">
    <div class="sd-cart-wrap">
        <form action="{{ route('cart-add', $product->id) }}" method="POST">
            @csrf
            <div class="quickview-cart-plus-minus">
                <input type="text" name="quantity" value="1" class="border border-gray-300 text-center w-12">
            </div>
            <button type="submit" class="cart-btn bg-pink-400 text-black hover:bg-black hover:text-pink-400 rounded-full px-8 py-3 mt-4 inline-flex items-center transition-all duration-200">
                <svg class="fill-current mr-3" width="26" height="24" viewBox="0 0 26 24">
                    <!-- SVG Path Icons Here -->
                </svg>
                Add to Cart
            </button>
        </form>
    </div>
    <a href="shop-details.html" class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
        <i class="far fa-heart"></i>
    </a>
</div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- shop-details-area-end -->

</main>
<!-- main-area-end -->
@endsection
