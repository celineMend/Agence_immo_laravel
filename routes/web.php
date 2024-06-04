<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprieteController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('proprietes', [ProprieteController::class, 'index'])->name('proprietes.index');
Route::get('/ajouter', [ProprieteController::class, 'ajouter'])->name('proprietes.ajouter');
Route::post('/ajouter_traitement', [ProprieteController::class, 'ajouter_traitement'])->name('proprietes.ajouter_traitement');
Route::get('proprietes/{id}', [ProprieteController::class, 'detail'])->name('proprietes.detail');
Route::get('/modifier/{id}', [ArticleController::class, 'modifier_proprietes'])->name('proprietes.modifier');
Route::post('/modifier/traitement', [ArticleController::class, 'modifier_proprietes_traitement'])->name('proprietes.modifier');
