<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Propriete;
use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    public function index()
    {
        $proprietes = Propriete::all();
        return view('proprietes.index', compact('proprietes'));
    }

    public function ajouter()
    {
        $categories = Categorie::all();
        return view('proprietes.ajouter', compact('categories'));
    }
}
