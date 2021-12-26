<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class,'index']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
