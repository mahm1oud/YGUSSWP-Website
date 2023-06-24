<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * جدول تفاصيل الترميز العام للشركة
     */
    public function up(): void
    {
        Schema::create('company_ganeral_val_details', function (Blueprint $table) {
            $table->bigIncrements('ganeral_val_details_num');
            $table->integer('ganeral_val_num')->index();
            $table->integer('ganeral_val_details_order');
            $table->string('ganeral_val_details_name')->nullable();
            $table->string('ganeral_val_details_foreign_name')->nullable();
            $table->boolean('ganeral_val_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_ganeral_val_details');
    }
};
