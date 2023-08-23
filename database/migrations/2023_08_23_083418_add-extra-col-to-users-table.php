<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('employee_id')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('NRC_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female','other'])->nullable();
            $table->text('address')->nullable();
            $table->bigInteger('department_id')->nullable();
            $table->date('date_of_join')->nullable();
            $table->boolean('is_present')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['employee_id','phone','NRC_number','date_of_birth','gender','address','department_id','date_of_join','is_present']);
        });
    }
};
