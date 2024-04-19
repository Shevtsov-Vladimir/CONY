<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

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

Route::get('catalog', function () {
    return view('catalog');
})->name('catalog');




Route::middleware(['guest'])->group(function () {
    Route::get('/signup', [RegisterController::class, 'signUp'])->name('auth.sign_up');
    Route::post('/signup', [RegisterController::class, 'store'])->name('auth.store');

    Route::get('/login', [RegisterController::class, 'loginform'])->name('auth.loginform');
    Route::post('/login', [RegisterController::class, 'login'])->name('auth.login');
});



Route::middleware(['admin'])->group(function () {
    Route::resource('/admin/orders', OrderController::class);
    Route::resource('/admin/products', ProductController::class);
    Route::resource('/admin/categories', CategoryController::class);

    $order_statuses = ['Создан', 'Принят', 'Отклонён'];
    Route::view('/admin', 'admin.home', ['products' => Product::all(), 'categories' => Category::all(), 'orders' => Order::all(), 'order_statuses' => $order_statuses]);
});



Route::middleware(['auth'])->group(function () {
    Route::post('/order/store', [OrderController::class, "store"])->name('order.store');
    Route::get('/logout', [RegisterController::class, 'logout'])->name('auth.logout');

    Route::get('/purchase_history', function () {
        $orders = Order::with('products')->get();
        return view('purchase_history', ['orders' => $orders]);
    })->name('purchase_history');

    Route::get('/cart', function () {
        return view('cart');
    })->name('cart');

    Route::get('/order_registration', function () {
        return view('order_registration');
    })->name('order_registration');
});
