<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\CommentaireController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('proprietes', [ProprieteController::class, 'index'])->name('proprietes.index');
Route::get('/ajouter', [ProprieteController::class, 'ajouter'])->name('proprietes.ajouter');
Route::post('/ajouter_traitement', [ProprieteController::class, 'ajouter_traitement'])->name('proprietes.ajouter_traitement');
Route::get('proprietes/{id}', [ProprieteController::class, 'detail'])->name('proprietes.detail');

Route::get('commentaires', [CommentaireController::class, 'afficherCommentaire'])->name('proprietes.commentaires.afficher');
Route::post('ajouterCommentaire/{id}/traitement', [CommentaireController::class, 'ajouterCommentaireTraitement'])->name('commentaire.ajouter');

Route::get('modifierCommentaire/{id}', [CommentaireController::class, 'modifierCommentaire']);
Route::post('modifierCommentaire/{id}/traitement', [CommentaireController::class, 'modifierCommentaireTraitement'])->name('commentaire.modifier');

Route::get('supprimerCommentaire/{id}', [CommentaireController::class, 'supprimerCommentaire']);


