<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])-> name ('principal');
Route::get('/telas', [\App\Http\Controllers\TelasController::class, 'telas'])-> name ('screen');
Route::get('/candidato', [\App\Http\Controllers\vagasController::class, 'vagas'])-> name ('vagas');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])-> name ('SignIn');
Route::get('/empresa', [\App\Http\Controllers\EmpresaController::class,'empresa'])->name ('candidato');