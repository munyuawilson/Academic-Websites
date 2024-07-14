<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;

Route::get('/', function () {
    return view('index');
});
Route::get('/how-it-works',function(){
    return view('layouts.pages.hiw');
})->name('hiw');
Route::get('/samples',function(){
    return view('layouts.pages.samples');
})->name('samples');
Route::get('/services',function(){
    return view('layouts.pages.services');
})->name('services');
Route::get('/revision',function(){
    return view('layouts.pages.revision');
})->name('revision');
Route::get('/sign-up',function(){
    return view('layouts.pages.sign-up');
})->name('sign-up');
Route::get('/log-in',function(){
    return view('layouts.pages.log-in');
})->name('log-in');
Route::get('/Dashboard',"App\Http\Controllers\logincontroller@show_name"
)->name('Dashboard')->middleware('auth');

Route::get('/order',function(){
    return view('layouts.pages.order');
})->name('order');
Route::post('/submit-order',"App\Http\Controllers\ordercontroller@order")->name('submit-order');
Route::post('/log-in',"App\Http\Controllers\logincontroller@login");
Route::post('/sign-up',"App\Http\Controllers\logincontroller@signup");



Route::get('/Dashboard/completed',"App\Http\Controllers\logincontroller@completed")->middleware('auth')->name('completed');

Route::get('/Dashboard/revision',"App\Http\Controllers\logincontroller@revision")->middleware('auth')->name('dashboard-revision');

Route::get('/Dashboard/disputed',"App\Http\Controllers\logincontroller@disputed")->middleware('auth')->name('disputed');
Route::get('/Dashboard/paid',"App\Http\Controllers\logincontroller@paid")->middleware('auth')->name('paid');
Route::get('/Dashboard/progress',"App\Http\Controllers\logincontroller@InProgress")->middleware('auth')->name('progress');

Route::get('/logout', 'App\Http\Controllers\logincontroller@logout')->name('logout');


//admin
Route::get('/admin',"App\Http\Controllers\admincontroller@show_name"
)->name('admin');

Route::get('/admin/completed',"App\Http\Controllers\admincontroller@completed")->name('completed');

Route::get('/admin/revision',"App\Http\Controllers\admincontroller@revision")->name('dashboard-revision');

Route::get('/admin/disputed',"App\Http\Controllers\admincontroller@disputed")->name('disputed');
Route::get('/admin/paid',"App\Http\Controllers\admincontroller@paid")->name('paid');
Route::get('/admin/progress',"App\Http\Controllers\admincontroller@InProgress")->name('progress');
Route::get('/admin/addblog',function(){
    return view('layouts.pages.admin.addblog');
})->name('writeblog');
Route::post('/admin/addblog',"App\Http\Controllers\blogcontroller@writeblog")->name('writeblog');
Route::get('/blog',"App\Http\Controllers\blogcontroller@blog")->name('blog');