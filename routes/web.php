<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;
use App\Http\Middleware\AuthenticateUser;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/', [HomeController::class, 'index']);

Route::get('/login', [HomeController::class, 'login'])->name('auth.login.show');
Route::post('/login', [HomeController::class, 'storelogin'])->name('auth.login.store');

Route::resource('/stocks', StockController::class);