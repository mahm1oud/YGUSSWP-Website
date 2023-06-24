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
        Schema::create('company_currency', function (Blueprint $table) {
            $table->bigIncrements('currency_num');
            $table->string('currency_name')->nullable();
            $table->string('currency_foreign_name')->nullable();
            $table->string('currency_symbol')->nullable();
            $table->double('currency_rounding')->nullable();
            $table->integer('currency_decimal_places')->nullable();
            $table->boolean('currency_active')->nullable();
            $table->string('currency_position')->nullable();
            $table->string('currency_unit_label')->nullable();
            $table->string('currency_subunit_label')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_currency');
    }
};
