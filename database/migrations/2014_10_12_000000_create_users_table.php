<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_id');
            $table->string('employee_num')->index();
            $table->string('company_num')->index();
            $table->string('company_branch_num')->index();
            $table->string('email')->unique();
            $table->string('join_date')->unique();
            $table->string('phone_number')->nullable();
            $table->string('status')->nullable();
            $table->string('role_name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('position')->nullable();
            $table->string('department')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('is_company')->nullable();
            $table->string('sn')->nullable();
            $table->integer('close_storage')->nullable();
            $table->boolean('must_close')->nullable();
            $table->boolean('current_state')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
