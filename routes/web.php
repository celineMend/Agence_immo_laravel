<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentaireController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('commentaires', [CommentaireController::class, 'afficherCommentaire'])->name('proprietes.commentaires.afficher');
Route::post('ajouterCommentaire/{id}/traitement', [CommentaireController::class, 'ajouterCommentaireTraitement'])->name('comment.store');

