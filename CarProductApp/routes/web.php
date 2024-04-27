<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/passwords/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/auth/passwords/login', [LoginController::class, 'login']);
Route::post('/auth/passwords/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/auth/passwords/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/auth/passwords/register', [RegisterController::class, 'register']);
