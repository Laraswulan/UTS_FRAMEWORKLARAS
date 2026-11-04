<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;


Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/landing', [LandingController::class, 'home'])->name('landing');
Route::get('/', [LandingController::class, 'home']);

