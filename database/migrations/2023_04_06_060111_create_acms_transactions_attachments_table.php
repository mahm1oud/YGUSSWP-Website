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
        Schema::create('acms_transactions_movements', function (Blueprint $table) {
            $table->bigIncrements('acms_transactions_movements_num');
            $table->integer('company_num');
            $table->integer('company_branch_num');
            $table->integer('company_preiod_num');
            $table->integer('acms_tran_num');
            $table->integer('acms_tran_move_type_num')->nullable();
            $table->string('acms_tran_move_statment')->nullable();
            $table->string('acms_tran_move_subject')->nullable();
            $table->integer('acms_tran_move_frm_dept_num')->nullable();
            $table->integer('acms_tran_move_frm_emp_num')->nullable();
            $table->integer('acms_tran_move_to_dept_num')->nullable();
            $table->integer('acms_tran_move_to_emp_num')->nullable();
            $table->integer('acms_required_procedure_num')->nullable();
            $table->integer('acms_performed_procedure_num')->nullable();
            $table->string('acms_tran_move_dt')->nullable();
            $table->string('acms_tran_move_entry_dt')->nullable();
            $table->string('acms_tran_move_status_num')->nullable();
            $table->boolean('acms_tran_move_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acms_transactions_movements');
    }
};
