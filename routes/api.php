<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\studentController;

/*/Route::get('/students', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::get('/students', [studentController::class,'index']);

Route::post('/students', function(){
    return 'Creando estudiantes';
    });

Route::put('/students/{id}', function(){
    return 'Actualizando estudiantes';
    });

Route::delete('/students/{id}', function(){
        return 'Eliminando estudiante';
        });



