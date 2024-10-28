<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;
use App\Http\Middleware\AuthenticateUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Landing Routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/', [HomeController::class, 'index']);

// User Routes

Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware(AuthenticateUser::class);

Route::get('/login', [HomeController::class, 'login'])->name('auth.login.show');
Route::post('/login', [HomeController::class, 'storelogin'])->name('auth.login.store');

Route::get('/logout', [HomeController::class, 'logout'])->name('auth.logout');

Route::post('/settings/update', [ProfileController::class, 'updater'])->name('update');
Route::post('/settings/delete', [ProfileController::class, 'deleter'])->name('delete');

// Inventory Routes

Route::resource('/stocks', StockController::class);