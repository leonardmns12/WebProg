<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\LoginController;
use App\Http\Controller\ProductController;
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/find' , 'HomeController@find');
Route::get('/detail/{id}' , 'HomeController@detail')->name('detail');

//Product
Route::post('/product/cart', 'ProductController@cart')->name('cart');

//Cart
Route::get('/cart', 'CartController@index')->name('cart1');
