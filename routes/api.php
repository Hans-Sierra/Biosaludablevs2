<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentoController;



Route::post('/medicamentos',[MedicamentoController::class,'store'])->name('medicamentos.store');