<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProProcesoController;
use App\Http\Controllers\TipTipoDocController;
use App\Http\Controllers\DocDocumentoController;

//Rutas para los endpoint

// PROCESOS 
Route::get('/proceso/list', [ProProcesoController::class, 'index']);
Route::post('/proceso/add', [ProProcesoController::class, 'store']);
Route::get('/proceso/list/{id}', [ProProcesoController::class, 'show']);
Route::put('/proceso/update/{id}', [ProProcesoController::class, 'update']);
Route::delete('/proceso/delete/{id}', [ProProcesoController::class, 'destroy']);
//Route::apiResource('/proceso', ProProcesoController::class);

// TIPOS DOCUMENTOS
Route::get('/tipodoc/list', [TipTipoDocController::class, 'index']);
Route::post('/tipodoc/add', [TipTipoDocController::class, 'store']);
Route::get('/tipodoc/list/{id}', [TipTipoDocController::class, 'show']);
Route::put('/tipodoc/update/{id}', [TipTipoDocController::class, 'update']);
Route::delete('/tipodoc/delete/{id}', [TipTipoDocController::class, 'destroy']);
//Route::apiResource('/tipodoc', TipTipoDocController::class);

// DOCUMENTOS
Route::get('/docdocument/list', [DocDocumentoController::class, 'index']);
Route::post('/docdocument/add', [DocDocumentoController::class, 'store']);
Route::get('/docdocument/list/{id}', [DocDocumentoController::class, 'show']);
Route::put('/docdocument/update/{id}', [DocDocumentoController::class, 'update']);
Route::delete('/docdocument/delete/{id}', [DocDocumentoController::class, 'destroy']);
//Route::apiResource('/docdocumet', DocDocumentoController::class);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
