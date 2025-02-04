<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ReporteController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/buzon', function (Request $request) {
    $entidad = $request->query('entidad'); // Capturar entidad 
    return view('buzon', compact('entidad'));
})->name('buzon');


Route::get('/login', function () { 
    return view('admin.login'); // Retorna la vista admin.login.blade.php
})->name('login');

Route::get('/dashboard', [ReporteController::class, 'mostrarReportes'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Ruta para procesar el formulario del formulario buzón
Route::post('/reporte', [ReporteController::class, 'store'])->name('reporte.store');

require __DIR__.'/auth.php';
