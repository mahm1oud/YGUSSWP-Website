<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyBranch extends Model
{
    use HasFactory;
    protected $fillable = [
        'branch_number',
        'company_branch_num',
        'branch_year',
        'branch_company_name',
        'branch_company_foreign_name',
        'branch_name',
        'branch_foreign_name',
        'branch_group_number',
        'branch_logo',
        'branch_main',
        'branch_country_number',
        'branch_gov_num',
        'branch_directorate_num',
        'branch_area_number',
        'branch_address',
        'branch_Arabic_letterhead1',
        'branch_Arabic_letterhead2',
        'branch_Arabic_letterhead3',
        'branch_foreign_letterhead1',
        'branch_foreign_letterhead2',
        'branch_foreign_letterhead3',
        'branch_website',
        'branch_Social_security_num',
        'branch_Warranty_agency_num',
        'branch_name_guarantee_agency',
        'branch_tax_location',
        'branch_Permanent_account_number',
        'branch_tax_number',
        'branch_tax_article',
        'branch_commercial_registration_num',
        'branch_currency',
        'branch_subcurrency',
        'branch_comments',
        'branch_group_num',
    ];


    public function companyfinancialfear()
    {
        return $this->hasMany('App\Models\CompanyFinancialYear');
    }
}
