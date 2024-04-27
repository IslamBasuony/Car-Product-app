<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateCarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admins/createCar', [CreateCarController::class, "create"])->name("admins.createCar");
Route::post('/admins', [CreateCarController::class, "store"])->name("admins.store");
Route::get('/admins/car', [CreateCarController::class, "index"])->name("admins.index");
Route::delete('/admins/{car}', [CreateCarController::class, "delete"])->name("admins.delete");
Route::get('/admins/tabs', [CreateCarController::class, "tabs"])->name("admins.tabs");
Route::get('/admins/service', [HomeController::class, "service"])->name("admins.service");
Route::get('/admins/about', [HomeController::class, "about"])->name("admins.about");






