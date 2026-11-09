<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

Route::resource('karyawan', KaryawanController::class)
    ->only(['index', 'store', 'destroy']);
