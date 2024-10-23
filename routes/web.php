<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConvertidorController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/inicio', function () {
    return 'Has iniciado la aplicación'; 
})->name('inicio');

Route::get('/convertidor', [ConvertidorController::class, 'index'])->name('convertidor');

Route::post('/convertir', [ConvertidorController::class, 'convert'])->name('convertidor.convert');
