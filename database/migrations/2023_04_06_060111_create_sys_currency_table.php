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
        Schema::create('sys_currency', function (Blueprint $table) {
            $table->bigIncrements('currency_num');
            $table->string('country_name');
            $table->string('country_nati_name');//الجنسية
            $table->string('currency_unit_label');
            $table->string('currency_subunit_label');
            $table->string('currency_symbol');
            $table->boolean('currency_active')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sys_currency');
    }
};
