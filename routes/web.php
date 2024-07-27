<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

use App\Http\Controllers;
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
    return view('index');
})->name('index');
//Route::get('/order',['as'=> '','uses'=> '']);
Route::get('/order', function () {return view('/order');})->name("order");
Route::post("/confirm-order", "App\Http\Controllers\OrderController@order")->name("confirm-order");
Route::get("/checkout",function () {return view('/payment');})->name("checkout");
Route::get("/faqs",function (){
    return view("faqs");
})->name("faqs");

Route::get("/admin/login",function (){
    return view("pages.admin.log-in");
})->name("login");

Route::post("/admin/login","App\Http\Controllers\LoginController@login")->name("login");