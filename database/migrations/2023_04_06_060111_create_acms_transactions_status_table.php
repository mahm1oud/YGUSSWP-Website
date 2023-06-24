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
        Schema::create('acms_transactions_status', function (Blueprint $table) {
            $table->bigIncrements('acms_transactions_status_num');
            $table->string('acms_transactions_status_name');
            $table->string('acms_transactions_status_foreign_name')->nullable();
            $table->boolean('acms_transactions_status_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acms_transactions_status');
    }
};
