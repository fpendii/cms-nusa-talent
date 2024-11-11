<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BerandaController;



Route::get('/', [BerandaController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/beranda', [BerandaController::class, 'index']);
});


