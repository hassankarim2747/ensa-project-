<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concours extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'date_debut',
        'date_fin',
        'etat',
        'conditions_admission',
        'procedure_selection',
        'prerequis_pedagogiques',
        'procedure_candidature',
        'calendrier',
    ];
}
