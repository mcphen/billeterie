<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trajets extends Model
{
    protected $fillable = [
        'nombre_place','prix','date_depart','heure_depart','lieu_depart','lieu_arrive','date_arrive','heure_arrive','voiture_id','user_id'
    ];
}
