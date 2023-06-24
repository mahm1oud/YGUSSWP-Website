<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_department_his', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_num')->nullable()->index();
            $table->integer('employee_num')->nullable()->index();
            $table->string('from_dt')->nullable();
            $table->string('to_dt')->nullable();
            $table->boolean('active')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
