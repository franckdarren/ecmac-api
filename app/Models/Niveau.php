<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $fillable = ['nom'];

    public function filieres()
    {
        return $this->belongsToMany(Filiere::class, 'filiere_niveau');
    }
}
