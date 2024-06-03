<?php

namespace App\Http\Controllers;

use App\Models\Propriete;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function afficherCommentaire($propriete_id)
    {
        $propriete = Propriete::findOrFail($propriete_id);
        $commentaires = $propriete->commentaires;

        return view('commentaires.index', compact('propriete', 'commentaires'));
    }


}
