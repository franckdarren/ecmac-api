<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $fillable = [
        'nom',
        'url_photo',
        'email',
        'phone',
        'diplomes',
        'matieres',
        'isActif',
    ];

    public function filieres()
    {
        return $this->belongsToMany(Filiere::class, 'enseignant_filiere');
    }
}
