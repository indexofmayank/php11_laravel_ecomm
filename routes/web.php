<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('/auth/login');
})->name('logout');

Route::get('/register', function () {
    return view('/auth/registration');
})->name('registerScreen');

Route::post('/registration', [AuthController::class, 'registerUser'])->name('registration');

Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/shop/{purl}', [ProductController::class, 'shop']);