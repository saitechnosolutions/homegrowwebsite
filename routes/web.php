<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::view('/','pages.home');
Route::view('about','pages.about');
Route::view('cancellation','pages.cancellation');
Route::view('privacy_policy','pages.privacy');
Route::view('register','pages.register');

Route::view('terms','pages.terms');
Route::view('shipping','pages.shipping');
Route::view('faq','pages.faq');
Route::view('allproducts','pages.allproduct');
Route::view('mycart','pages.mycart');
Route::view('checkout','pages.checkout');

Route::view('contact','pages.contact');
route::view('single_products','pages.singleproduct');


?>
