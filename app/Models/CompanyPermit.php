<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPermit extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_num',
        'permit_num',
        'project_num',
        'permit_date',
        'date_go',
        'date_back',
        'order_reference',
        'reference_num',
        'company_name',
        'activity_name',
        'activity_type',
        'general_goal',
        'from_gov',
        'from_disit',
        'to_gov',
        'to_disit',
        'itinerary'
    ];

}
