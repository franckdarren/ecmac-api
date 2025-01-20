<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'debouches',
        'liste_matiere',
        'url_image',
        'horaire',
        'referentiel',
        'frais_scolarite',

    ];

    public function niveaux()
    {
        return $this->belongsToMany(Niveau::class, 'filiere_niveau');
    }

    public function enseignants()
    {
        return $this->belongsToMany(Enseignant::class, 'enseignant_filiere');
    }
}
