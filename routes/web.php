<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RiwayatController;

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/informasi', [InformasiController::class, 'informasi'])->name('informasi');
Route::get('/pinjam', [PinjamController::class, 'pinjam'])->name('pinjam');
Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
Route::get('/riwayat', [RiwayatController::class, 'riwayat'])->name('riwayat');