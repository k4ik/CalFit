<?php

use App\Http\Controllers\Actions\GetController;
use App\Http\Controllers\Actions\ImcController;
use App\Http\Controllers\Actions\MacronutrientesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/get', [GetController::class, 'index'])->name('get.index');
    Route::post('/get', [GetController::class, 'calculate_get'])->name('get.calculate_get');
    Route::get('/imc', [ImcController::class, 'index'])->name('imc.index');
    Route::post('/imc', [ImcController::class, 'calculate_imc'])->name('imc.calculate_imc');
    Route::get('/macronutrientes', [MacronutrientesController::class, 'index'])->name('macro.index');
    Route::post('/macronutrientes', [MacronutrientesController::class, 'calculate_macronutrientes'])->name('macro.calculate_macronutrientes');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
