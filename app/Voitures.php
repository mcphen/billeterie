<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voitures extends Model
{
    protected $fillable = [
        'plaque_immatricultion','marque_voiture','modele','couleur', 'annee', 'user_id'
    ];
}
