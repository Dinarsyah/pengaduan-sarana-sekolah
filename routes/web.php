<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UmpanBalikController;

Route::resource('siswa', SiswaController::class);
Route::resource('aspirasi', AspirasiController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('admin', AdminController::class);
Route::resource('status', StatusController::class);
Route::resource('umpan-balik', UmpanBalikController::class);