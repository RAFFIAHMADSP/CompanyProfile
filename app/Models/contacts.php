<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'id_contacts';
    
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message', 
    ];
}
