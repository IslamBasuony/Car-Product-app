<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cars/service', [HomeController::class, "service"])->name("cars.service");
Route::get('/cars/about', [HomeController::class, "about"])->name("cars.about");

Route::get('/cars', [CarController::class, "index"])->name("cars.index");
Route::get('/cars/create', [CarController::class, "create"])->name("cars.create");
Route::post('/cars', [CarController::class, "store"])->name("cars.store");
Route::get('/cars/tabs', [CarController::class, "tabs"])->name("cars.tabs");
Route::get('/cars/{car}', [CarController::class, "show"])->name("cars.show");
Route::delete('/cars/{car}', [CarController::class, "destroy"])->name("cars.destroy");






