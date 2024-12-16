<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class testimonials extends Model
{
    protected $table = 'testimonials';
    protected $primaryKey = 'id_testimonials';

    protected $fillable = [
        'client_name',
        'client_company',
        'testimonial',
        
    ];
}
