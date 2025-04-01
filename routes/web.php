<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () { return view('welcome');});

//auth
Route::get('/register', [RegisterController::class, 'create'])->middleware("guest");
Route::post('/register', [RegisterController::class, 'store']);

Route::delete('/logout', [SessionController::class, 'destroy']);

Route::get('/login', [SessionController::class, 'create'])->name("login");
Route::post('/login', [SessionController::class, 'store']);

