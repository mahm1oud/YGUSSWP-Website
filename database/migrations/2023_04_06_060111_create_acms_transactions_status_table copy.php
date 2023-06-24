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
        Schema::create('acms_transactions_note', function (Blueprint $table) {
            $table->bigIncrements('acms_transactions_note_num');
            $table->string('company_num');
            $table->string('company_branch_num');
            $table->string('company_preiod_num');
            $table->string('acms_transactions_num');
            $table->string('acms_transactions_note_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acms_transactions_note');
    }
};
