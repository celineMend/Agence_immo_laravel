<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_auteur',
        'contenu',
        'date_publication',
        'propriete_id',
    ];


    public function proprietes(){
        return $this->hasMany(Proprietes::class);
    }
}
