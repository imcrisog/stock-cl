<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;
use App\Http\Middleware\AuthenticateUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Adminware;
use App\Http\Middleware\InvSpewaare;
use App\Http\Middleware\Sellerware;

// Landing Routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/', [HomeController::class, 'index']);

// User Routes

Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware(AuthenticateUser::class);

Route::get('/login', [HomeController::class, 'login'])->name('auth.login.show');
Route::post('/login', [HomeController::class, 'storelogin'])->name('auth.login.store');

Route::get( '/logout', [HomeController::class, 'logout'])->name('auth.logout');

Route::get('/settings', [ProfileController::class, 'settings'])->name('settings')->middleware(AuthenticateUser::class);

Route::post('/settings/update', [ProfileController::class, 'updater'])->name('settings.update');
Route::post('/settings/delete', [ProfileController::class, 'deleter'])->name('settings.delete');

// Inventory Routes

Route::resource('/stocks', StockController::class)->missing(function () {
    return redirect()->route('stocks.index');
});