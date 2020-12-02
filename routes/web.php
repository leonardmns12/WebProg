<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\LoginController;
use App\Http\Controller\ProductController;
use App\Http\Controller\TransactionController;
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
Route::get('/cart/delete/{id}' , 'CartController@deleteCart')->name('deletecart');
Route::get('/cart/checkout' , 'CartController@checkout')->name('cartcheckout');

//Transaction
Route::get('/transaction' , 'TransactionController@index')->name('history');


//DetailTransaction
Route::get('/transaction/detail/{id}', 'TransactionController@detail')->name('detailtransaction');
