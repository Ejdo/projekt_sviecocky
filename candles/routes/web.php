<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
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

Route::get('/products', 'App\Http\Controllers\ProductController@index') ->name('products');
Route::get('/product', 'App\Http\Controllers\ProductController@show_product_detail') ->name('product_detail');


Route::get('/cart', 'App\Http\Controllers\CartController@show_cart') ->name('cart');
Route::get('/add-to-cart', 'App\Http\Controllers\CartController@addToCart')->name('cart.add');
Route::get('/cart/remove/{id}', 'App\Http\Controllers\CartController@removeCartItem')->name('cart.remove');


Route::get('/checkout', 'App\Http\Controllers\CheckoutController@show_checkout') ->name('checkout');
Route::get('/login', 'App\Http\Controllers\UserController@show_login') ->name('login');
Route::post('/login', 'App\Http\Controllers\UserController@login') ->name('login.submit');
Route::post('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');
Route::get('/register', 'App\Http\Controllers\UserController@showRegistration')->name('register');
Route::post('/register', 'App\Http\Controllers\UserController@register')->name('register.submit');
Route::get('/search', 'App\Http\Controllers\SearchController@show_search') ->name('search');