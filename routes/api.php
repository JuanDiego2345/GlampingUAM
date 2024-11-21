<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CabinController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ServiceCabinController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CabinLevelController;
use App\Http\Controllers\api\v1\AuthController;

Route::post('/v1/login', [AuthController::class, 'login'])->name('login'); // Asegúrate de que esta línea esté presente


Route::post('/users', [UserController::class, 'store']);

// routes/api.php
// Route::post('/users', [UserController::class, 'store']);

// // routes/api.php
// Route::post('/users', [UserController::class, 'store']);
// ... código existente ...
Route::post('/users', [UserController::class, 'store'])->name('users.store'); // Asegúrate de que esta línea esté presente
// ... código existente ...


Route::middleware(['auth:sanctum'])->group(function () {
    
    Route::post('/v1/logout', [AuthController::class, 'logout'])->name('api.logout');
    Route::apiResource('/serviceCabin', ServiceCabinController::class);
    Route::apiResource('/services', ServiceController::class);
    Route::apiResource('/cabins', CabinController::class);
    Route::apiResource('/reserves', ReserveController::class);
    Route::apiResource('/cabinLevels', CabinLevelController::class); // Añadido el CRUD de cabinLevel
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});
