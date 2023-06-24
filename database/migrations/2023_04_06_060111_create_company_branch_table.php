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
        Schema::create('company_branch', function (Blueprint $table) {
            $table->bigIncrements('company_branch_num');
            $table->integer('company_branch_num');
            $table->string('company_branch_name')->nullable();
            $table->string('company_branch_foreign_name')->nullable();
            $table->string('company_branch_short_name')->nullable();
            $table->string('company_branch_phone')->nullable();
            $table->string('company_branch_phone1')->nullable();
            $table->string('company_branch_fax')->nullable();
            $table->integer('company_branch_country_id')->nullable()->index();
            $table->string('company_branch_country')->nullable();
            $table->string('company_branch_city')->nullable();
            $table->string('company_branch_street')->nullable();
            $table->string('company_branch_address')->nullable();
            $table->string('company_branch_street2')->nullable();
            $table->integer('company_branch_currency_id')->nullable()->index();
            $table->string('company_branch_currency')->nullable();
            $table->string('company_branch_subcurrency')->nullable();
            $table->string('company_branch_vat')->nullable();
            $table->string('company_branch_mail')->nullable();
            $table->string('company_branch_website')->nullable();
            $table->string('company_branch_icon')->nullable();
            $table->string('company_branch_photo')->nullable();
            $table->string('company_branch_registry')->nullable();
            $table->string('company_branch_zip')->nullable();
            $table->integer('company_branch_state_id')->nullable()->index();
            $table->string('company_branch_partner_latitude')->nullable();
            $table->string('company_branch_partner_longitude')->nullable();
            $table->string('company_branch_social_twitter')->nullable();
            $table->string('company_branch_social_facebook')->nullable();
            $table->string('company_branch_social_youtube')->nullable();
            $table->string('company_branch_social_instagram')->nullable();
            $table->string('company_branch_social_github')->nullable();
            $table->string('company_branch_social_linkedin')->nullable();
            $table->string('company_branch_tax_id')->nullable();
            $table->integer('company_branch_bank_account')->nullable();
            $table->integer('company_branch_bank_account2')->nullable();
            $table->string('company_branch_contact_person')->nullable();
            $table->string('company_branch_state_province')->nullable();
            $table->string('company_branch_comments')->nullable();
            $table->string('company_branch_group_number')->nullable();
            $table->boolean('active')->nullable()->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_branch');
    }
};
