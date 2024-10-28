<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;
use App\Http\Middleware\AuthenticateUser;
use Illuminate\Support\Facades\Route;


// Landing Routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/', [HomeController::class, 'index']);

// User Routes

Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware(AuthenticateUser::class);

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [HomeController::class, 'storelogin']);

Route::get('/settings', [HomeController::class, 'settings'])->name('settings');

Route::post('/settings/update', [HomeController::class, 'update'])->name('update');
Route::post('/settings/delete', [HomeController::class, 'delete'])->name('delete');

// Inventory Routes

Route::resource('/stocks', StockController::class);