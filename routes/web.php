<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConvertidorController;

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Ruta para mostrar la página de inicio
Route::get('/inicio', function () {
    return 'Has iniciado la aplicación'; // Aquí puedes redirigir a otra vista o controlador
})->name('inicio');

// Ruta para mostrar el formulario del convertidor
Route::get('/convertidor', [ConvertidorController::class, 'index'])->name('convertidor');

// Ruta para manejar la conversión de unidades
Route::post('/convertir', [ConvertidorController::class, 'convert'])->name('convertidor.convert');
