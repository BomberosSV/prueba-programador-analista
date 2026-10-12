<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvedorController;

//Route::resource('proveedores', ProvedorController::class);

Route::resource('proveedores', ProvedorController::class)->parameters([
    'proveedores' => 'proveedor'
]);

