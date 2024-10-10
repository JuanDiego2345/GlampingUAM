<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabinController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/hola/locos', 
        [CabinController::class, 
        'index']) -> name('hola.locos');

Route::apiResource('/cabins', CabinController::class);


Route::post('/cabins', 
        [CabinController::class, 'store']) -> name('cabins.store');
