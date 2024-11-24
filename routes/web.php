<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ProductController;
use App\Models\Products;


Route::get('/', function () {

    $products = Products::paginate(6);
    return view('welcome', ['products' => $products]);
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

Route::get('/about', function () {
    return view('pages/about_page');
});
Route::get('/ourteam', function () {
    return view('pages/our_team_page');
});
Route::get('/help', function () {
    return view('pages/contact_page');
});

Route::get('/shop/{purl}', [ProductController::class, 'shop']);