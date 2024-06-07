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