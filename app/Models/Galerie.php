<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    protected $fillable = [
        'url_image',
        'description',

        'album_id',

    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
