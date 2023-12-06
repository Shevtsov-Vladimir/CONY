<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/sign_in', function () {
    return view('sign_in');
})->name('sign_in');

Route::get('/sign_up', function () {
    return view('sign_up');
})->name('sign_up');

Route::get('catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('catalog_open', function () {
    return view('catalog_open');
})->name('catalog_open');

Route::get("/show", function () {
    return view('show');
})->name('show');

Route::get('/purchase_history', function () {
    return view('purchase_history');
})->name('purchase_history');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/order_registration', function () {
    return view('order_registration');
})->name('order_registration');
