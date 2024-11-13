<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BerandaAdminController;
use App\Http\Controllers\admin\PenggunaAdminController;
use App\Http\Controllers\admin\PaketHostingAdminController;
use App\Http\Controllers\admin\CostumerAdminController;



Route::get('/', [BerandaAdminController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/beranda', [BerandaAdminController::class, 'index']);
    Route::get('/pengguna', [PenggunaAdminController::class, 'index']);
    Route::get('/paket-hosting', [PaketHostingAdminController::class, 'index']);
    Route::get('/paket-hosting/edit', [PaketHostingAdminController::class, 'edit']);
    Route::get('/costumer', [CostumerAdminController::class, 'index']);
    Route::get('/costumer/tambah', [CostumerAdminController::class, 'tambah']);
});


