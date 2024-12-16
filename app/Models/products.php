<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_products';

    protected $fillable = [
        'name_product',
        'descriptions_product',
        'images',
        'price', 
        'destination_countries', 

    ];
}
