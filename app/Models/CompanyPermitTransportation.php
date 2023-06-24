<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPermitTransportation extends Model
{
    use HasFactory;
    protected $fillable = [
        'permit_num',
        'emp_num',
        'car_type',
        'car_panel_num',
        'Driver_name',
        'Driver_idcard',
        'Driver_card_url',
        'Driver_phone',
        'note',

    ];


}
