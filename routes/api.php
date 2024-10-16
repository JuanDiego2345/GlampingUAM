<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CabinController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ServiceCabinController;
use App\Http\Controllers\UserController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('/hola/locos', 
//         [CabinController::class, 
//         'index']) -> name('hola.locos');

Route::apiResource('/serviceCabin', ServiceCabinController::class);
Route::apiResource('/services', ServiceController::class);
Route::apiResource('/cabins', CabinController::class);
Route::apiResource('/users', UserController::class);
// Route::get(/cab)
// Route::post('/cabins', 
//         [CabinController::class, 'store']) -> name('cabins.store');



Route::apiResource('/reserves', ReserveController::class);

