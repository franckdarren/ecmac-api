<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $fillable = [
        'url_image',
        'description',
        'jour',
        'heure',
        'lieu',
    ];
}
