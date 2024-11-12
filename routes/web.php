<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BerandaAdminController;
use App\Http\Controllers\admin\PenggunaAdminController;



Route::get('/', [BerandaAdminController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/beranda', [BerandaAdminController::class, 'index']);
    Route::get('/pengguna', [PenggunaAdminController::class, 'index']);
});


