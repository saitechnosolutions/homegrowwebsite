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
Route::view('privacy_policy','pages.privacy');
Route::view('allproducts','pages.allproduct');
Route::view('contact','pages.contact');
