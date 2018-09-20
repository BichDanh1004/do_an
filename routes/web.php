<?php

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

Route::get('signup','UserController@Signup');
Route::get('login','UserController@Login');
Route::get('layout','UserController@Layout');
Route::get('homepage','UserController@HomePage');
Route::get('genuine_shoe','UserController@GenuineShoe');
Route::get('size_guide','UserController@SizeGuide');

Route::get('cart','CartController@Cart');
Route::get('shoppingcart','CartController@ShoppingCart');
Route::get('product_detail','ProductController@ProductDetail');
Route::get('adidas_shoe','ShoesController@AdidasShoe');
Route::get('nike_shoe','ShoesController@NikeShoe');
Route::get('men_shoe','ShoesController@MenShoe');
Route::get('women_shoe','ShoesController@womenShoe');


 