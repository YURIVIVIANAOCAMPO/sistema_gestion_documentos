<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProProcesoController;



// PROCESOS rutas para los endpoint

Route::get('/proceso/list', [ProProcesoController::class, 'index']);
Route::post('/proceso/add', [ProProcesoController::class, 'store']);
Route::get('/proceso/list/{id}', [ProProcesoController::class, 'show']);
Route::put('/proceso/update/{id}', [ProProcesoController::class, 'update']);
Route::delete('/proceso/delete/{id}', [ProProcesoController::class, 'destroy']);
// Route::apiResource('/proceso', ProProcesoController::class);





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
