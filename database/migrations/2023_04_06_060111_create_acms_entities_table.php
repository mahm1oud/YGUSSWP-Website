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
        Schema::create('acms_entities', function (Blueprint $table) {
            $table->bigIncrements('acms_entity_num');
            $table->string('acms_entity_name');
            $table->string('acms_entity_foreign_name')->nullable();
            $table->string('acms_entity_phone')->nullable();
            $table->string('acms_entity_whatsup')->nullable();
            $table->string('acms_entity_fax')->nullable();
            $table->string('acms_entity_email')->nullable();
            $table->boolean('acms_entity_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acms_entities');
    }
};
