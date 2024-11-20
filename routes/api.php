<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CabinController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ServiceCabinController;
use App\Http\Controllers\UserController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('/serviceCabin', ServiceCabinController::class);
    Route::apiResource('/services', ServiceController::class);
    Route::apiResource('/cabins', CabinController::class);
    Route::apiResource('/users', UserController::class);
    Route::apiResource('/reserves', ReserveController::class);

    Route::post(
        '/v1/login',
        [
            App\Http\Controllers\api\v1\AuthController::class,
            'login'
        ]
    )->name('api.login');

    Route::post(
        '/v1/logout',
        [
            App\Http\Controllers\api\v1\AuthController::class,
            'logout'
        ]
    )->name('api.logout');
});
