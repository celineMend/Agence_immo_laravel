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

}
