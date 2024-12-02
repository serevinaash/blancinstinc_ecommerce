@extends("layouts.frontend")
@section("content")

<!-- START: BREADCRUMB -->
<section class="bg-gray-100 py-8 px-4">
  <div class="container mx-auto">
    <ul class="breadcrumb">
      <li>
        <a href="{{ route("index") }}">Home</a>
      </li>
      <li>
        <a href="{{ route("cart") }}">Shopping Cart</a>
      </li>
      <li>
        <a href="#" aria-label="current-page">Checkout</a>
      </li>
    </ul>
  </div>
</section>
<!-- END: BREADCRUMB -->

<!-- START: CHECKOUT FORM -->
<section class="md:py-16">
  <div class="container mx-auto px-4">
    <div class="w-full md:px-4 md:w-8/12">
      <div class="bg-gray-100 px-4 py-6 md:p-8 md:rounded-3xl">
        <form action="{{ route('checkout-submit') }}" method="POST">
          @csrf

          <div class="flex flex-start mb-6">
            <h3 class="text-2xl">Shipping Details</h3>
          </div>

          <div class="flex flex-col mb-4">
            <label for="complete-name" class="text-sm mb-2">Complete Name</label>
            <input type="text" name="name" id="complete-name" class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none" placeholder="Input your name" required />
          </div>

          <div class="flex flex-col mb-4">
            <label for="email" class="text-sm mb-2">Email Address</label>
            <input type="email" name="email" id="email" class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none" placeholder="Input your email address" required />
          </div>

          <div class="flex flex-col mb-4">
            <label for="address" class="text-sm mb-2">Detail Address</label>
            <input type="text" name="address" id="address" class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none" placeholder="Input your address" required />
          </div>

          <div class="flex flex-col mb-4">
            <label for="phone-number" class="text-sm mb-2">Phone Number</label>
            <input type="tel" name="phone" id="phone-number" class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none" placeholder="Input your phone number" required />
          </div>

          <div class="text-center">
            <button type="submit" class="bg-pink-400 text-black hover:bg-black hover:text-pink-400 focus:outline-none w-full py-3 rounded-full text-lg focus:text-black transition-all duration-200 px-6">
              Complete Order
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
