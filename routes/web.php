<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CineController;
use App\Http\Controllers\DulceriaController;
use App\Http\Controllers\FormatoController;
use App\Http\Controllers\OtrosController;
use App\Http\Controllers\ServiciosController;

Route::get('/', function () {
    return view('principal');
});

Route::get('/cines', [CineController::class, 'index'])->name('cine.index');
Route::get('/dulceria', [DulceriaController::class, 'index'])->name('dulceria.index');
Route::get('/formato', [FormatoController::class, 'index'])->name('formato.index');
Route::get('/otros', [OtrosController::class, 'index'])->name('otro.index');
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');