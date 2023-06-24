<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPermitStaff extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_num',
        'permit_num',
        'emp_num',

    ];

}
