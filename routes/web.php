<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/how-it-works',function(){
    return view('layouts.pages.hiw');
})->name('hiw');