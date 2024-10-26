<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\AuthenticateUser;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']); //->middleware(AuthenticateUser::class);
Route::post('/', [HomeController::class, 'index']);

Route::get('/login', [HomeController::class, 'login']);
Route::post('/login', [HomeController::class, 'storelogin']);//->middleware(AuthenticateUser::class);
