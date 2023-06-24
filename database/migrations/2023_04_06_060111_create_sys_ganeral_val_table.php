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
        Schema::create('sys_ganeral_val', function (Blueprint $table) {
            $table->bigIncrements('ganeral_val_num');
            $table->string('ganeral_val_name')->nullable();
            $table->string('ganeral_val_foreign_name')->nullable();
            $table->boolean('ganeral_val_active')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sys_ganeral_val');
    }
};
