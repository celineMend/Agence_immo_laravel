<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propriete extends Model
{
    use HasFactory;
    Protected $fillable=[
        'nom',
        'image',
        'description',
        'adresse',
        'statut',
        'date_ajout',
        'categorie_id',
        'users_id',

    ];

    public function categories(){
        return $this->belongsTo(categories::class);
    }

    public function commentaires(){
        return $this->belongsTo(comentaires::class);
    }



}
