<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/list', 'App\Http\Controllers\LoginController@show');

Route::get('/signup', function(){
    return view('pages.signup');
});
Route::get('/login', function(){
    return view('pages.login');
});


Route::post('/signup','App\Http\Controllers\LoginController@store');

Route::post('/login','App\Http\Controllers\LoginController@index');


Route::prefix('/dashboard')->group(function () {
    // Dashboard route
    Route::get('/', function () {
        return view('client.dashboard');
    })->name('dashboard');

    // Courses route
    Route::get('/courses', function () {
        return view('client.courses');
    })->name('courses');

    // Calendar route
    Route::get('/calendar', function () {
        return view('client.calendar');
    })->name('calendar');

    // Messages route
    Route::get('/messages', function () {
        return view('client.messages');
    })->name('messages');

    // Resources route
    Route::get('/resources', function () {
        return view('client.resources');
    })->name('resources');

    // Settings route
    Route::get('/settings', function () {
        return view('client.settings');
    })->name('settings');
})->middleware('auth');


Route::prefix('/admin')->group(function () {
    // Dashboard route
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin-dashboard');

    // Courses route
    Route::get('/courses', function () {
        return view('admin.courses');
    })->name('admin-courses');

    // Calendar route
    Route::get('/calendar', function () {
        return view('admin.calendar');
    })->name('admin-calendar');

    // Messages route
    Route::get('/messages', function () {
        return view('admin.messages');
    })->name('admin-messages');

    // Resources route
    Route::get('/resources', function () {
        return view('admin.resources');
    })->name('admin-admin-resources');

    // Settings route
    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('admin-settings');
});
