<?php

use App\Http\Controllers\ajaxcontroller;
use App\Http\Controllers\mailcontroller;
use App\Http\Controllers\registercontroller;
use Illuminate\Routing\Controller;
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
Route::view('replacement','pages.replacement');

Route::view('register','pages.register');

Route::view('mywishlist','pages.mywishlist');
Route::view('myaccount','pages.myaccount');
Route::view('accountsetting','pages.accountsetting');
Route::view('editaddress','pages.editaddress');
Route::view('add_addres','pages.add_addres');
Route::view('edit_manage_addres','pages.edit_manage_addres');
Route::view('my_order_status','pages.my_order_status');

Route::view('terms','pages.terms');
Route::view('shipping','pages.shipping');
Route::view('faq','pages.faq');
Route::view('allproducts','pages.allproduct');
Route::view('mycart','pages.mycart');
Route::view('checkout','pages.checkout');

Route::view('contact','pages.contact');
route::view('single_products','pages.singleproduct');



Route::post('/mail',[mailcontroller::class,"mail"]);
Route::POST('/register',[registercontroller::class,'register']);
Route::get('/city/{id}',[registercontroller::class,"city"]);
Route::post('/login',[registercontroller::class,'login']);
Route::GET('/logout',[registercontroller::class,'logout']);



Route::post('/update_product',[ajaxcontroller::class,'updateuser']);
Route::post('/add_adress',[ajaxcontroller::class,'add_adress']);





?>
