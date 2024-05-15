<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TentangController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/tentang', [TentangController::class, 'tentang'])->name('tentang');