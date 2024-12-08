@extends("layouts.frontend")
@section("content")

    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content text-center">
                            <h2 class="title">Cart Page</h2>
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item trail-item trail-begin">
                                        <a href="index-2.html"><span>Home</span></a>
                                    </li>
                                    <li class="breadcrumb-item trail-item trail-end"><span>Cart</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-shape one"><img src=" {{url("/mppl/assets/img/others/video_shape01.png")}}" alt="shape"></div>

            <div class="video-shape two"><img src="{{url("/mppl/assets/img/others/video_shape02.png")}}" alt="shape"></div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- cart-area -->
        <div class="cart__area section-py-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <table class="table cart__table">
                            <thead>
                                <tr>
                                    <th class="product__thumb">&nbsp;</th>
                                    <th class="product__name">Product</th>
                                    <th class="product__price">Price</th>
                                    <th class="product__subtotal">Subtotal</th>
                                    <th class="product__remove">&nbsp;</th>
                                </tr>
                            </thead>

            @forelse($carts as $cart)
                            <tbody>
                                <tr>
                                    <td class="product__thumb">
                                        <a href="shop-details.html"><img src="{{$cart->product->galleries()->exists() ? Storage::url($cart->product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}"
                                                alt=""></a>
                                    </td>
                                    <td class="product__name">
                                        <a href="shop-details.html">  {{$cart->product->name}}</a>
                                    </td>
                                    <td class="product__price">IDR {{number_format($cart->product->price)}}</td>

                                    <td class="product__subtotal">Rp{{ number_format($cart->subtotal, 2) }}</td>
                                    <td class="product__remove">
                                        <form action="{{route('cart-delete', $cart->id)}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="text-red-500 hover:text-red-700">
                                                ×
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__name">
                                        <a href="shop-details.html">{{ $cart->product->name }}</a>
                                    </td>
                                    <td class="product__price">Rp{{ number_format($cart->product->price, 2) }}</td>
                                    <td class="product__subtotal">Rp{{ number_format($cart->subtotal, 2) }}</td>
                                </tr>

                                <tr>
                                    @empty
                                    <p id="cart-empty" class="text-center py-8">
                                      Ooops... Cart is empty
                                      <a href="{{route("index")}}" class="underline">Shop Now</a>
                                    </p>
                                  @endforelse
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </section>

                    <div class="checkout__area section-py-130">
                        <div class="container">
                            <div class="row">
                            <form action="{{ route('checkout') }}" class="customer__form-wrap" method="POST">
                                @csrf
                                <span class="title">Billing Details</span>

                                <div class="form-grp">
                                    <label for="complete-name">Nama lengkap</label>
                                    <input type="text"  name="name"
                  id="complete-name">
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="phone">Phone *</label>
                                            <input type="number" id="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="email">Email address *</label>
                                            <input type="email" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <label for="complete-name">Alamat lengkap</label>
                                    <input type="text" name="address" id="address">
                                </div>
                                <div class="flex flex-col mb-4" style="display: none;">
                                    <label for="complete-name" class="text-sm mb-2">Choose Payment</label>
                                    <div class="flex -mx-2 flex-wrap">
                                      <div class="px-2 w-6/12 h-24 mb-4">
                                        <button type="button" data-value="midtrans" data-name="payment" class="border border-gray-200 focus:border-red-200 flex items-center justify-center rounded-xl bg-white w-full h-full focus:outline-none">
                                          <img src="/frontend/images/content/logo-midtrans.png" alt="Logo Fedex" class="object-contain max-h-full" />
                                        </button>
                                      </div>
                                    </div>
                                  </div>

                                  <input type="hidden" name="courier" id="selectedCourier" value="">

                                  <div class="flex flex-col mb-4" style="display: none;">
                                    <label>Courier</label>
                                    <div class="flex -mx-2 flex-wrap">
                                      <div class="px-2 w-6/12 h-24 mb-4">
                                        <button type="button" data-value="jne" data-name="jne" class="border border-gray-200 focus:border-red-200 flex items-center justify-center rounded-xl bg-white w-full h-full focus:outline-none">
                                          <img src="/frontend/images/content/jne.svg" alt="Logo midtrans" class="object-contain max-h-full" />
                                        </button>
                                      </div>
                                      <div class="px-2 w-6/12 h-24 mb-4">
                                        <button type="button" data-value="jnt" data-name="jnt" class="border border-gray-200 focus:border-red-200 flex items-center justify-center rounded-xl bg-white w-full h-full focus:outline-none">
                                          <img src="/frontend/images/content/j&t.png" alt="Logo bitcoin" class="object-contain max-h-full" />
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="cart__collaterals-wrap">
                                        <h2 class="title">Cart totals</h2>
                                        <ul class="list-wrap">
                                            <li>Subtotal <span>Rp{{ number_format($cart->subtotal, 2) }}</span></li>
                                               </ul>
                                        <button class="btn btn-sm">Proceed to checkout</a>
                                    </div>
                                </div>

                                </div>
                                </form>
                        </div>
                </div>
            </div>
            <!-- checkout-area-end -->
        </div>
    </main>

@endsection
