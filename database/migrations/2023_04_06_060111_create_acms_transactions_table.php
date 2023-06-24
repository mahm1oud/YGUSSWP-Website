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
        Schema::create('acms_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_num');
            $table->integer('company_branch_num');
            $table->integer('company_preiod_num');
            $table->integer('company_project_num');
            $table->integer('company_costcenter_num');
            $table->integer('company_project_activity_num');
            $table->integer('acms_tran_type_num');
            $table->integer('acms_tran_record_num');//رقم السجل
            $table->string('acms_transactions_num');
            $table->string('acms_transactions_subject');
            $table->string('acms_transactions_subject_details');
            $table->string('acms_transactions_statment');
            $table->integer('acms_tran_sender_entity_num');
            $table->integer('acms_tran_sender_dept_num');
            $table->integer('acms_tran_sender_emp_num');
            $table->integer('acms_tran_send_dt');
            $table->integer('acms_tran_receiver_dept_num');
            $table->integer('acms_tran_receiver_emp_num');
            $table->integer('acms_tran_received_dt');
            $table->string('acms_tran_dt')->nullable();
            $table->integer('acms_tran_class_num');
            $table->integer('acms_tran_secrecy_degree_num');
            $table->integer('acms_tran_significance_level_num');
            $table->integer('acms_tran_path_num');
            $table->integer('acms_tran_receiver_entity_num');
            $table->integer('acms_tran_in_entity_num');
            $table->integer('acms_tran_in_record_num');
            $table->string('acms_tran_in_correspondent_name');
            $table->string('acms_tran_in_correspondent_phone');
            $table->string('acms_tran_in_correspondent_id_card');
            $table->integer('acms_tran_in_receipt_method_num');
            $table->string('acms_tran_in_entity_out_num');//رقم صادر الجهة
            $table->string('acms_tran_in_dt')->nullable();
            $table->string('acms_tran_in_received_dt');
            $table->string('acms_tran_in_received_time');
            $table->integer('acms_tran_in_recipient_emp_num');//مستلم المعاملة
            $table->integer('acms_tran_in_dept_num')->nullable();
            $table->string('acms_tran_in_dept_num')->nullable();
            $table->string('acms_tran_recipient_emp_num')->nullable();
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
        Schema::dropIfExists('acms_transactions');
    }
};
