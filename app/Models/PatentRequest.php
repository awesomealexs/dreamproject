<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatentRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'client_name',
        'INN',
        'legal_address',
        'ceo_name',
        'date_of_application',
        'application_number',
        'descriptiveness_text',
        'falsity_text',
        'perspective_forecast',
    ];

}
