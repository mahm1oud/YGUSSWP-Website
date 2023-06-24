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
        Schema::create('company_departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('department_name')->nullable();
            $table->string('department_foreign_name')->nullable();
            $table->boolean('active')->nullable();
            $table->integer('company_num')->nullable()->index();
            $table->integer('parent_id')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('company_departments')->insert([
            ['department_name' => 'Web Department'],
            ['department_name' => 'IT Management'],
            ['department_name' => 'Marketing'],
        ]);
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
