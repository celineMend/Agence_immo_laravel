<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\Auth\ConnexionController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('proprietes', [ProprieteController::class, 'index'])->name('proprietes.index');
Route::get('/ajouter', [ProprieteController::class, 'ajouter'])->name('proprietes.ajouter');
Route::post('/ajouter_traitement', [ProprieteController::class, 'ajouter_traitement'])->name('proprietes.ajouter_traitement');

Route::get('proprietes/{id}', [ProprieteController::class, 'detail'])->name('proprietes.detail');

Route::get('/modifier/{id}', [ProprieteController::class, 'modifier'])->name('proprietes.modifier');
Route::post('/modifier_traitement', [ProprieteController::class, 'modifier_traitement'])->name('proprietes.modifier_traitement');
Route::get('/proprietes/supprimer/{id}', [ProprieteController::class, 'supprimer_proprietes'])->name('proprietes.supprimer');

//catégories
Route::get('categories',[CategorieController::class,'index'])->name('categories.index');
Route::get('/ajouterCategorie', [CategorieController::class, 'ajouter'])->name('categories.ajouter');
Route::post('/ajouter_categorie_traitement', [CategorieController::class, 'ajouter_categorie_traitement'])->name('categories.ajouter_traitement');
Route::get('categories/{id}', [CategorieController::class, 'detail'])->name('categories.detail');
Route::get('/modifierCategorie/{id}', [CategorieController::class, 'modifier'])->name('categories.modifier');
Route::post('/modifierCategorie_traitement', [CategorieController::class, 'modifier_traitement'])->name('categories.modifier_traitement');
Route::delete('/categories/supprimer/{id}', [CategorieController::class, 'supprimer'])->name('categories.supprimer');



Route::get('commentaires', [CommentaireController::class, 'afficherCommentaire'])->name('proprietes.commentaires.afficher');
Route::post('ajouterCommentaire/{id}/traitement', [CommentaireController::class, 'ajouterCommentaireTraitement'])->name('commentaire.ajouter');

Route::get('modifierCommentaire/{id}', [CommentaireController::class, 'modifierCommentaire']);
Route::post('modifierCommentaire/{id}/traitement', [CommentaireController::class, 'modifierCommentaireTraitement'])->name('commentaire.modifier');

Route::get('supprimerCommentaire/{id}', [CommentaireController::class, 'supprimerCommentaire']);

/* Les routes pour l'authentification */
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');