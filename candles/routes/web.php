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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', 'App\Http\Controllers\HomeController@index') ->name('home');


Route::get('/products/{type}/{page?}', 'App\Http\Controllers\ProductController@show_by_type') ->name('products');
Route::get('/products/{page?}', 'App\Http\Controllers\ProductController@show_all_products') ->name('all_products');
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@show_product_detail') ->name('product_detail');


Route::get('/cart', 'App\Http\Controllers\CartController@show_cart') ->name('cart');
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@show_checkout') ->name('checkout');
Route::get('/login', 'App\Http\Controllers\UserController@show_login') ->name('login');
Route::get('/registration', 'App\Http\Controllers\UserController@show_reg') ->name('registration');
Route::get('/search', 'App\Http\Controllers\SearchController@show_search') ->name('search');