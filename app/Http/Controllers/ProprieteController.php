<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Propriete;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $proprietes = Propriete::all();
        return view('proprietes.index', compact('proprietes', 'categories'));
    }


    public function ajouter()
    {
        $categories = Categorie::all();
        return view('proprietes.ajouter', compact('categories'));
    }
    public function ajouter_traitement (Request $request)
    {
       $propriete = New Propriete();
       $propriete->nom = $request->nom;
       $propriete->image = $request->image;
       $propriete->categorie_id = $request->categorie_id;
       $propriete->description = $request->description;
       $propriete->adresse = $request->adresse;
       $propriete->statut = $request->statut;
       $propriete->date_ajout= $request->date_ajout=now();
       $propriete->save();
       return redirect('/proprietes')->with('status','propriete a été ajouter avec success');

    }

    public function detail($id)
    {
        $propriete = Propriete::with('commentaires')->findOrFail($id);
        $commentaires = Commentaire::where('propriete_id', $id)->get();


        return view('proprietes.detail', compact('propriete', 'commentaires'));
    }

    public function modifier($id){
        $proprietes = Propriete::find($id);
        return view('proprietes.modifier', compact('proprietes'));
    }

    public function modifier_traitement(Request $request)
    {



    $propriete = Propriete::find($request->id);
    $propriete->nom = $request->nom;
    $propriete->description = $request->description;
    $propriete->image = $request->image;
    $propriete->save();
    return redirect('/proprietes')->with('status',' le propriete a été modifier avec succès');
    }

    public function supprimer_proprietes($id)
{
    $propriete = Propriete::findOrFail($id);
    $propriete->delete();
    return redirect('/proprietes')->with('status', 'La propriété a été supprimée avec succès');
}

}
