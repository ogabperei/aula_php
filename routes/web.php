<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/imc', [ImcController::class, 'index']);

Route::get('/imc/calcular', [ImcController::class,'calcular']);

Route::put('/imc/update', [ImcController::class,'update']);

Route::delete('imc/delete', [ImcController::class,'delete']);

Route::get('/imc/show', [ImcController::class,'show']);