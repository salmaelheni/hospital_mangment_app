<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;


// });
// Route::get('/home', function () {
//     return view('index');

Route::get('index', [CustomAuthController::class, 'dashboard']);
Route::get('h/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
