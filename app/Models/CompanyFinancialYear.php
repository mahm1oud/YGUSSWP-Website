<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyFinancialYear extends Model
{
    use HasFactory;
    protected $fillable = [
        'period_number',
        'company_num',
        'branch_num',
        'period_type',
        'from_month',
        'from_year',
        'to_month',
        'to_year',
        'periods_of_year',
        'numbering',
        'period_number',
        'from_date',
        'to_date',
        'month_name',
        'month_foreign_name',
    ];

    public function company()
    {
    	return $this->belongsTo('App\Models\Company');
    }
}
