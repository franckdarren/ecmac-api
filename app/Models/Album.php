<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'thematique',
        'description',
        'isActif',
    ];

    public function galeries()
    {
        return $this->hasMany(Galerie::class);
    }
}
