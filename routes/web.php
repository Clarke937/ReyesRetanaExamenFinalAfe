<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
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
    return view('welcome');
});

Auth::routes();

//Route::resource('/products',ProductController::class);
//Route::resource('/sellers',SellerController::class);


Route::get('products', 'App\Http\Controllers\ProductController@manageVue');
Route::get('products/create', 'App\Http\Controllers\ProductController@create');
Route::resource('vueproducts','App\Http\Controllers\ProductController');

Route::get('sellers', 'App\Http\Controllers\SellerController@manageVue');
Route::resource('vuesellers','App\Http\Controllers\SellerController');