<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [ShopController::class, 'index'])->name('home');
Auth::routes(['verify'=> true]);
Route::group(['middleware' => 'auth'], function(){
    Route::get('shop', [ShopController::class, 'shop'])->name('shop');
    Route::get('/product/{product:name}', [ShopController::class, 'details'])->name('product-details');
    Route::group(['prefix' => 'merchant'], function () {
       Route::get('list-products', [ProductController::class, 'listProducts'])->name('merchant.products');
       Route::get('list-orders', [OrderController::class, 'listOrders'])->name('merchant.orders');
       Route::get('update-order-status/{op}/{status_id})', [OrderController::class, 'updateStatus'])->name('merchant.update-order-status');
       Route::post('create-product', [ProductController::class, 'createProduct'])->name('create-product');
    });


    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

    Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('product.add-to-cart');
    Route::patch('update-cart', [CartController::class, 'update']);
    Route::delete('remove-from-cart',  [CartController::class, 'remove']);
    Route::get('cart', [CartController::class, 'cart'])->name('cart');

    Route::post('/pay', [App\Http\Controllers\CartController::class, 'redirectToGateway'])->name('pay');
    Route::get('/payment/callback', [App\Http\Controllers\CartController::class, 'handleGatewayCallback']);

});

