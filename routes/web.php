<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome'); // Se agrega el nombre a la ruta
//O tambien
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/buzon', function () { 
    return view('buzon'); // Retorna la vista buzon.blade.php
})->name('buzon');


Route::get('/login', function () { 
    return view('admin.login'); // Retorna la vista admin.login.blade.php
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
