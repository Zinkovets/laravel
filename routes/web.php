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

Route::get('/', function () {
    return view('about');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/login', function () {
    return view('login');
});


Route::post('/games', function () {
    return view('games');
});

Route::get('/ourplayers', function () {
    return view('ourplayers');
});

Route::get('/users', function () {
    return view('users');
});

Route::post('/login',[\App\Http\Controllers\AuthController::class,'showLoginForm'])->name('login');

Route::get('/register',[\App\Http\Controllers\AuthController::class,'showRegisterForm'])->name('register');

Route::post('/register_process',[\App\Http\Controllers\AuthController::class,'register'])->name('register_process');







