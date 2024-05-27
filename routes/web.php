<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/informasi', [UserController::class, 'informasi'])->name('informasi');
Route::post('/informasi/check', [BarangController::class, 'checkAvailability'])->name('informasi.check');
Route::get('/pinjam', [UserController::class, 'pinjam'])->name('pinjam');
Route::get('/profil', [UserController::class, 'profil'])->name('profil');
Route::get('/riwayat', [UserController::class, 'riwayat'])->name('riwayat');
Route::get('/konfirmasi', [AdminController::class,'konfirmasi'])->name('konfirmasi');
