<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;
use App\Http\Controllers\NotaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/imc', [ImcController::class, 'index']);

Route::get('/imc/calcular', [ImcController::class,'calcular'])->name('imc.calcular');

Route::get('/imc/store',[ImcController::class,'store'])->name('imc.store');

Route::get('/imc/show', [ImcController::class, 'show']);

Route::delete('/imc/delete/{id}', [ImcController::class,'destroy'])->name('imc.delete'); 

Route::put('/imc/update/{id}', [ImcController::class, 'update'])->name('imc.update');


// Rota Nota


Route::get('/nota', [NotaController::class, 'index']);

