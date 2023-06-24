<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_num',
        'company_parent_id',
        'company_name',
        'company_foreign_name',
        'company_short_name',
        'company_phone',
        'company_phone1',
        'company_fax',
        'company_country_id',
        'company_country',
        'company_city',
        'company_street',
        'company_street2',
        'company_address',
        'currency_id',
        'company_currency',
        'company_subcurrency',
        'company_vat',
        'company_mail',
        'company_website',
        'company_icon',
        'company_photo',
        'company_registry',
        'company_zip',
        'company_state_id',
        'company_partner_latitude',
        'company_partner_longitude',
        'company_social_twitter',
        'company_social_facebook',
        'company_social_youtube',
        'company_social_instagram',
        'company_social_github',
        'company_social_linkedin',
        'company_tax_id',
        'company_bank_account',
        'company_bank_account2',
        'company_contact_person',
        'company_state_province',
        'company_comments',
        'company_group_number',
        'CompanyFinancialYear',
    ];


    public function companyfinancialfear()
    {
        return $this->hasMany('App\Models\CompanyFinancialYear');
    }
}
