<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrousel extends Model
{
    protected $fillable = [
        'titre',
        'description',
        'url_image',
        'lien',
        'num_ordre',
        'isActif',
    ];
}
