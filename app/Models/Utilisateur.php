<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{

    use HasFactory;
    protected $fillable = [
        'num_tel',
        'mots_passe',
        'nom',
        'prenom',
        'num_retrait',
        'moyen_retrait',
        'code_parainage',
        'code_user',
        'solde_user',
        'type_use',


    ];
}
