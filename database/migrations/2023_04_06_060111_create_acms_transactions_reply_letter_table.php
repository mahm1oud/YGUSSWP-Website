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
        Schema::create('acms_transactions_reply_letter', function (Blueprint $table) {
            $table->bigIncrements('acms_transactions_reply_letter_num');
            $table->integer('company_num');
            $table->integer('acms_transactions_num')->nullable();
            $table->string('acms_transactions_reply_letter_name')->nullable();
            $table->boolean('acms_transactions_reply_letter_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acms_transactions_reply_letter');
    }
};
