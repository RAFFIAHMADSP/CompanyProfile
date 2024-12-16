<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $table = 'company_profile';
    protected $primaryKey = 'id_company';

    protected $fillable = [
        'company_name',
        'logo',
        'visi_company',
        'misi_company',
        'history',
        'addres',
        'phone_company',
        'email_company'
    ];
}
