<?php

use App\Http\Controllers\Admin\ProductController;
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


Route::get('/', [ShopController::class, 'index']);
Route::get('/product/{product:name}', [ShopController::class, 'details'])->name('product-details');
Route::group(['prefix' => 'admin'], function () {
   Route::get('list-products', [ProductController::class, 'listProducts']);
   Route::post('create-product', [ProductController::class, 'createProduct'])->name('create-product');
});

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
