<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'cne',
        'nom',
        'prenom',
        'filiere',
        'email',
        'telephone',
        'date_naissance',
        'adresse',
        'etat',
        'concours',
    ];


    
}
