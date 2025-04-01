<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])-> name ('principal');
Route::get('/telas', [\App\Http\Controllers\TelasController::class, 'telas'])-> name ('screen');
