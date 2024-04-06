<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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

Route::get('/', function () {
    $products = Product::orderBy('created_at')->limit(3)->get();
    return view('home', ['products' => $products]);
})->name('home');

Route::get('/products/{product}', [ProductController::class, "show"])->name('show');

Route::middleware(['auth'])->group(function() {
    Route::post('/order/store', [OrderController::class, "store"])->name('order.store');
    Route::get('/logout', [RegisterController::class, 'logout'])->name('auth.logout');
});

Route::middleware(['guest'])->group(function () {   
    Route::get('/signup', [RegisterController::class, 'signUp'])->name('auth.sign_up');
    Route::post('/signup', [RegisterController::class, 'store'])->name('auth.store');

    Route::get('/login', [RegisterController::class, 'loginform'])->name('auth.loginform');
    Route::post('/login', [RegisterController::class, 'login'])->name('auth.login');
});

Route::middleware(['admin'])->group(function () {
    Route::view('/admin', 'admin.layout');
});

Route::get('catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('catalog_open', function () {
    return view('catalog_open');
})->name('catalog_open');

// Route::get("/show", function () {
//     return view('show');
// })->name('show');

Route::get('/purchase_history', function () {
    return view('purchase_history');
})->name('purchase_history');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/order_registration', function () {
    return view('order_registration');
})->name('order_registration');
