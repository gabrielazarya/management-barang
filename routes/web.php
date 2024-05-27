<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/informasi', [UserController::class, 'informasi'])->name('informasi');
Route::get('/pinjam', [UserController::class, 'pinjam'])->name('pinjam');
Route::get('/profil', [UserController::class, 'profil'])->name('profil');
Route::get('/riwayat', [UserController::class, 'riwayat'])->name('riwayat');