<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.index', compact('categories'));
    }

    public function ajouter()
    {
        $categories = Categorie::all();
        return view('categories.ajouter', compact('categories'));
    }
    public function ajouter_traitement (Request $request)
    {
       $categorie = New Categorie();
       $categorie->libelle = $request->libelle;
       $categorie->description = $request->description;
       $categorie->save();
       return redirect('/categories')->with('status','categorie a été ajouter avec success');

    }

    public function detail($id)
    {
        $categorie = Categorie::findOrFail($id);

        return view('categories.detail', compact('categorie'));
    }
    public function modifier($id){
        $categories = Categorie::find($id);
        return view('categories.modifier', compact('categories'));
    }

    public function modifier_traitement(Request $request)
    {
    $categorie = Categorie::find($request->id);
    $categorie->libelle = $request->libelle;
    $categorie->description = $request->description;
    $categorie->save();
    return redirect('/categories')->with('status',' le categorie a été modifier avec succès');
    }


}
