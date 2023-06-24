<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company', function (Blueprint $table) {
            $table->bigIncrements('company_num');
            $table->string('company_name')->nullable();
            $table->string('company_foreign_name')->nullable();
            $table->string('company_short_name')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_phone1')->nullable();
            $table->string('company_fax')->nullable();
            $table->integer('company_country_id')->nullable()->index();
            $table->string('company_country')->nullable();
            $table->string('company_city')->nullable();
            $table->string('company_street')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_street2')->nullable();
            $table->integer('currency_id')->nullable()->index();
            $table->string('company_currency')->nullable();
            $table->string('company_subcurrency')->nullable();
            $table->string('company_vat')->nullable();
            $table->string('company_mail')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_icon')->nullable();
            $table->string('company_photo')->nullable();
            $table->string('company_registry')->nullable();
            $table->string('company_zip')->nullable();
            $table->integer('company_state_id')->nullable()->index();
            $table->string('company_partner_latitude')->nullable();
            $table->string('company_partner_longitude')->nullable();
            $table->string('company_social_twitter')->nullable();
            $table->string('company_social_facebook')->nullable();
            $table->string('company_social_youtube')->nullable();
            $table->string('company_social_instagram')->nullable();
            $table->string('company_social_github')->nullable();
            $table->string('company_social_linkedin')->nullable();
            $table->string('company_tax_id')->nullable();
            $table->integer('company_bank_account')->nullable();
            $table->integer('company_bank_account2')->nullable();
            $table->string('company_contact_person')->nullable();
            $table->string('company_state_province')->nullable();
            $table->string('company_comments')->nullable();
            $table->string('company_group_number')->nullable();
            $table->string('CompanyFinancialYear')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
