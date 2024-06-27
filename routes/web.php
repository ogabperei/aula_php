<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/imc', [ImcController::class, 'index']);

Route::get('/imc/calcular', [ImcController::class,'calcular'])->name('imc.calcular');

Route::get('/imc/store',[ImcController::class,'store'])->name('imc.store');

Route::get('/imc/show', [ImcController::class, 'show']);