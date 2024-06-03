<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprieteController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('proprietes', [ProprieteController::class, 'index'])->name('proprietes.index');
