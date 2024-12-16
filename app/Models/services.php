<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id_services';

    protected $fillable = [
        'judul_services',
        'description_services',
        
    ];
}
