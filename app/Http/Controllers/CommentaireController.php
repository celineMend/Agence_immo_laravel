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

    public function ajouterCommentaireTraitement(Request $request, $propriete_id) {

        $request->validate([

            'contenu' => 'required',
            'nom_auteur' => 'required'
        ]);
        $propriete = Propriete::findOrFail($propriete_id);

        $propriete->commentaires()->create([

            'contenu' => $request->contenu,
            'nom_auteur' => $request->nom_auteur,
        ]);

        return back()->with('status', 'Le commentaire a été ajouter avec succès');

    }

    public function modifierCommentaire($id) {

        $commentaire = Commentaire::findOrFail($id);

        return view('commentaires.modifierCommentaire', compact('commentaire'));
    }


}
