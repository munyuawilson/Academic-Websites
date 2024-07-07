<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/Dashboard',function(){
    return view('layouts.pages.dashboard');
})->name('Dashboard');
