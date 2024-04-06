<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\OrderController;
use App\Models\Product;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('/products', ProductController::class);

Route::get('/products/{amount}', [ProductController::class, "products"])->name("products");

Route::get('/filteredProducts/{filter}', [ProductController::class, "filteredProducts"])->name("filteredProducts");

Route::get('/idSpecifiedArray', [ProductController::class, 'getRecordsById']);

Route::middleware(['auth'])->group(function () {
});

// Route::post('/order/store', [OrderController::class, "store"]);