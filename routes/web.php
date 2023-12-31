<?php

use App\Http\Controllers\ajaxcontroller;
use App\Http\Controllers\allproductcontroller;
use App\Http\Controllers\CarttoCheckController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\mailcontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\productOrdercontroller;
use App\Http\Controllers\registercontroller;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentResponseController;

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
Route::view('myorders','pages.myorders');
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

Route::get('/get-address-details', [registercontroller::class, 'getAddressDetails']);

Route::get('/city/{id}',[registercontroller::class,"city"]);
Route::post('/login',[registercontroller::class,'login']);
Route::GET('/logout',[registercontroller::class,'logout']);


Route::get('single_products/{id}', [productController::class,'customRedirect']);

Route::post('/update_product',[ajaxcontroller::class,'updateuser']);
Route::post('/add_adress',[ajaxcontroller::class,'add_adress']);
Route::get('/makedefault/{id}',[ajaxcontroller::class,'make_default_address']);
Route::get('/edit_manage_addres/{id}',[ajaxcontroller::class,'edit_manage_addres']);

Route::get('/deletaddress/{id}',[ajaxcontroller::class,'deletaddress']);

Route::post('/edit_manage_ajax',[ajaxcontroller::class,'edit_update_managae_address']);


Route::post('/add_cart',[ajaxcontroller::class,'add_cart']);
Route::post('/add_wishlist',[ajaxcontroller::class,'add_wishlist']);


Route::GET('/cartremove/{id}',[ajaxcontroller::class,'removecart']);
Route::GET('/cartremove_all_cart/{id}',[ajaxcontroller::class,'cartremove_all_cart']);


Route::GET('/wishlistremove/{id}',[ajaxcontroller::class,'wishlistremove']);
Route::GET('/wishlist_remove_all/{id}',[ajaxcontroller::class,'wishlist_remove_all']);



Route::get('/search',[ajaxcontroller::class,'searchword']);


Route::post('/hotdeal',[allproductcontroller::class,'hotdeal']);
Route::post('/price_range',[allproductcontroller::class,'pricefilter']);


Route::post('/sendOtp',[registercontroller::class,'sendOtpFunction']);
Route::post('/checkOtp',[registercontroller::class,'checkOtp']);



Route::post('/forgotsendOtp',[registercontroller::class,'forgotsendOtpfunction']);
Route::post('/forgotcheckOtp',[registercontroller::class,'forgotcheckOtpfunction']);
Route::post('/savepassword',[registercontroller::class,'savepassword']);



Route::get('/my_order_status/{id}',[productOrdercontroller::class,'my_order_status']);




Route::post('/getCategory',[allproductcontroller::class,'getCategory']);
Route::get('/getAllVariants',[allproductcontroller::class,'getAllVariants']);





Route::post('/cancelProductFucntion',[ajaxcontroller::class,'cancelProductFucntion']);




// ==============its my =============== and checkout view remove
Route::get('single_products/{id}/{varid}', [ProductController::class, 'customRedirect']);
Route::post('/checkout', [CheckController::class, 'singlproData']);
Route::post('/siglesizedata', [ProductController::class, 'sigleajaxdata']);
Route::POST('/couponapply',[CouponController::class, 'coupondats']);
// payment page
Route::post('/payment',[PaymentController::class,'webpaymentIndexFunction']);
// payment process
Route::POST('/payment_request',[PaymentController::class,'initiateTransaction']);
Route::post('/payment_response', [PaymentResponseController::class,'handleResponse']);
Route::post('/payment_response_web', [PaymentResponseController::class,'handleResponseWeb']);
?>