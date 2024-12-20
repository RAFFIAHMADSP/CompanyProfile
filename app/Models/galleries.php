<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class galleries extends Model
{
    protected $table = 'galleries';
    protected $primaryKey = 'id_galleries';

    protected $fillable = [
        'title',
        'image',
        'descriptions',
    ];
}
