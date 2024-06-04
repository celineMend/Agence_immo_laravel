<?php

namespace App\Http\Controllers;
use App\Models\Commentaire;

use App\Models\Propriete;

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
            'date_publication' => now()

        ]);

        return back()->with('status', 'Le commentaire a été ajouter avec succès');

    }

    public function modifierCommentaire($id) {

        $commentaire = Commentaire::findOrFail($id);

        return view('commentaires.modifierCommentaire', compact('commentaire'));
    }

    public function modifierCommentaireTraitement(Request $request, $id)
    {
        $request->validate([
            'contenu' => 'required',
            'nom_auteur' => 'required'
        ]);

        $commentaire = Commentaire::findOrFail($id);

        $commentaire->update([
            'contenu' => $request->contenu,
            'nom_auteur' => $request->nom_auteur
        ]);

        return redirect()->route('proprietes.detail', $commentaire->propriete_id)->with('status', 'Le commentaire a été modifié avec succès');
    }

    public function supprimerCommentaire($id) {

        $commentaire = Commentaire::findOrFail($id);
        $commentaire->delete();

        return redirect()->route('proprietes.detail', $commentaire->propriete_id)->with('status', 'Le commentaire a bien été supprimer avec succès');
    }


}
