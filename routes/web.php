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

Route::get('/dashboard',"App\Http\Controllers\LoginController@show_name"
)->name('Dashboard')->middleware('auth');

Route::get('/logout',"App\Http\Controllers\LoginController@logout")->name('logout');

Route::get('/admin/completed',"App\Http\Controllers\LoginController@completed")->name('completed');

Route::get('/admin/revision',"App\Http\Controllers\LoginController@revision")->name('dashboard-revision');

Route::get('/admin/disputed',"App\Http\Controllers\LoginController@disputed")->name('disputed');
Route::get('/admin/paid',"App\Http\Controllers\LoginController@paid")->name('paid');
Route::get('/admin/progress',"App\Http\Controllers\LoginController@InProgress")->name('progress');
Route::get('/admin/addblog',function(){
    return view('pages.admin.addblog');
})->name('writeblog');
Route::post('/admin/addblog',"App\Http\Controllers\BlogController@writeblog")->name('writeblog');

Route::post('/admin/samples',"App\Http\Controllers\BlogController@writeSamples")->name('samples');

Route::get('/admin/samples',function(){
    return view('pages.admin.samples');
});

Route::get('/forgot-password',function(){
    return view('pages.forgot-password');
})->name('forgotPassword');
Route::post('/forgot-password',"App\Http\Controllers\LoginController@forgotPassword")->name('confirmCode');

Route::get('/confirm',function(){
    return view('pages.confirm');
})->name('confirm');
Route::post('/confirm',"App\Http\Controllers\LoginController@confirmCode");


Route::get('/samples','App\Http\Controllers\BlogController@Sample');
Route::get('/blog','App\Http\Controllers\BlogController@blog');

