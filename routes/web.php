<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontendController, DashboardController, MyTransactionController, ProductController, ProductGalleryController, TransactionController, UserController};
use App\Models\Transaction;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [FrontendController::class, "index"])->name("index");
Route::get('/contact', [FrontendController::class, "contact"])->name("contact");
Route::get("/details/{slug}", [FrontendController::class, "details"])->name("details");
Route::get('/blog1', [FrontendController::class, "blog1"])->name("blog1");
Route::get('/blog2', [FrontendController::class, "blog2"])->name("blog2");
Route::get('/blog3', [FrontendController::class, "blog3"])->name("blog3");
Route::get('/shop', [FrontendController::class, "shop"])->name("shop");
Route::get('/shopDetails', [FrontendController::class, "shopDetails"])->name("shopDetails");
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/cartPage', [FrontendController::class, 'cartPage'])->name('cartPage');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware(['auth:sanctum', 'verified'])->name("dashboard.")->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::resource('my-transaction', MyTransactionController::class)->only(
        'index',
        'show',
    );


        Route::resource('product', ProductController::class);
        Route::resource('product.gallery', ProductGalleryController::class)->shallow()->only(
            'index',
            'create',
            'store',
            'destroy'
        );
        Route::resource('transaction', TransactionController::class)->only(
            'index',
            'store',
            'update',
            'show',
            'edit'
        );
        Route::resource('user', UserController::class)->only(
            'index',
            'edit',
            'update',
            'destroy'
        );
    });


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get("/cart", [FrontendController::class, "cart"])->name("cart");
    Route::post("/cart/{id}", [FrontendController::class, "cartAdd"])->name("cart-add");
    Route::delete("/cart/{id}", [FrontendController::class, "cartDelete"])->name("cart-delete");
    Route::post("/checkout", [FrontendController::class, "checkout"])->name("checkout");
    Route::get("/checkout/success", [FrontendController::class, "success"])->name("checkout-sucess");

});
