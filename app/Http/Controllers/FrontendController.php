<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CheckoutRequest;
use App\Models\ItemTransaction;
use Exception;
use Midtrans\Config;
use Midtrans\Snap;

class FrontendController extends Controller
{
    public function index(Request $request){
        $products=Product::with(['galleries'])->latest()->get();
        return view("pages.frontend.index", compact('products'));
    }

    public function details(Request $request, $slug){
        $product=Product::with(['galleries'])->where('slug',$slug)->firstOrFail();
        $recommendations=Product::with(['galleries'])->inRandomOrder()->limit(4)->get();
        return view("pages.frontend.details", compact('product','recommendations'));
    }

    public function cartAdd(Request $request, $id)
{
    // Periksa apakah produk sudah ada di keranjang
    $cartItem = Cart::where('users_id', Auth::user()->id)
                    ->where('products_id', $id)
                    ->first();

    if ($cartItem) {
        // Tambahkan kuantitas jika sudah ada
        $cartItem->quantity += 1; // Increment kuantitas
        $cartItem->save();
    } else {
        // Tambahkan produk baru ke keranjang
        Cart::create([
            "users_id" => Auth::user()->id,
            "products_id" => $id,
            "quantity" => 1, // Default kuantitas
        ]);
    }

    return redirect("cart")->with('success', 'Product added to cart successfully.');
}



    public function cart(Request $request)
    {
        $carts = Cart::with(['product.galleries'])->where('users_id', Auth::user()->id)->get();

        $totalPrice = 0; // Inisialisasi total harga
        foreach ($carts as $cart) {
            $cart->subtotal = $cart->product->price * ($cart->quantity ?? 1);
            $totalPrice += $cart->subtotal; // Tambahkan subtotal ke total keseluruhan
        }

        return view('pages.frontend.cart', compact('carts', 'totalPrice'));
        // Pastikan 'totalPrice' dikirim ke view
    }

    public function success(Request $request){
        return view("pages.frontend.success");
    }
    public function blog(Request $request){
        return view("pages.frontend.blog");
    }
    public function blog1(Request $request){
        return view("pages.frontend.blog/blog1");
    }
    public function blog2(Request $request){
        return view("pages.frontend.blog/blog2");
    }
    public function blog3(Request $request){
        return view("pages.frontend.blog/blog3");
    }
    public function contact(Request $request){
        return view("pages.frontend.contact");
    }
        public function shop(Request $request){
            $products = Product::paginate(10);
            $products=Product::with(['galleries'])->latest()->get();
            return view("pages.frontend.shop", compact('products'));
        }
    public function shopDetails(Request $request){
        return view("pages.frontend.shopDetails");
    }
    public function cartPage(Request $request){
        return view("pages.frontend.cartPage");
    }

    public function cartDelete(Request $request, $id){
        $item=Cart::findOrFail($id);

        $item->delete();

        return redirect("cart");
    }

public function checkout(CheckoutRequest $request)
{
    $data = $request->all();

    // Get Carts Data
    $carts = Cart::with(["product"])->where("users_id", Auth::user()->id)->get();

    // Calculate total price from cart items
    $totalPrice = $carts->sum("product.price");

    // Add fixed amount of 15000 to the total price
    $totalPrice += 15000;

    // Add to Transaction data
    $data["users_id"] = Auth::user()->id;
    $data["total_price"] = $totalPrice;

    // Create transaction
    $transaction = Transaction::create($data);

    // Create transaction items
    foreach ($carts as $cart) {
        ItemTransaction::create([
            "transactions_id" => $transaction->id,
            "users_id" => $cart->users_id,
            "products_id" => $cart->products_id
        ]);
    }

    // Delete cart after transaction
    Cart::where("users_id", Auth::user()->id)->delete();

    // Midtrans Configuration
    Config::$serverKey = config("services.midtrans.serverKey");
    Config::$isProduction = config("services.midtrans.isProduction");
    Config::$isSanitized = config("services.midtrans.isSanitized");
    Config::$is3ds = config("services.midtrans.is3ds");

    // Setup Midtrans payment details
    $midtrans = [
        "transaction_details" => [
            "order_id" => "LUX-" . $transaction->id,
            "gross_amount" => (int) $transaction->total_price
        ],
        "customer_details" => [
            "first_name" => $transaction->name,
            "email" => $transaction->email,
        ],
        "enabled_payment" => ["gopay", "bank_transfer"],
        "vtweb" => []
    ];

    // Payment process
    try {
        $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
        $transaction->payment_url = $paymentUrl;
        $transaction->save();

        // Redirect to payment URL
        return redirect($paymentUrl);
    } catch (Exception $except) {
        // Handle exception and show error
        return redirect()->route('cart-page')->with('error', 'Payment failed: ' . $except->getMessage());
    }
}

}
