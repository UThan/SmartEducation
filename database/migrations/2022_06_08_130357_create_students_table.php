<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->string('phone',50);
            $table->text('address')->nullable();
            $table->enum('status',['Active','Deactivated','Completed','Postponed'])->default('Active');
            $table->enum('visa_status',['Not started','Process start','Pending','Completed'])->nullable();
            $table->enum('application_status',['Not started','Process start','Pending','Completed'])->nullable();
            $table->enum('offer_status',['Unknown','Received','Pending'])->nullable();
            $table->enum('coe_status',['Unknown','Received','Pending'])->nullable();
            $table->foreignId('course_id')->nullable();
            $table->foreignId('institute_id')->nullable();
            $table->foreignId('targeted_city_id')->nullable();		
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
        Schema::dropIfExists('students');
    }
}
