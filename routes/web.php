<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprieteController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('proprietes', [ProprieteController::class, 'index'])->name('proprietes.index');
Route::get('/ajouter', [ProprieteController::class, 'ajouter'])->name('proprietes.ajouter');
Route::post('/ajouter_traitement', [ProprieteController::class, 'ajouter_traitement'])->name('proprietes.ajouter_traitement');
