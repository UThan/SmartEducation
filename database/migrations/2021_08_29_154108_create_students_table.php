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
            $table->id()->index();
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('phone', 50);
            $table->text('address');
            $table->enum('visa_status', ['Not started', 'Process start', 'Pending', 'Completed']);
            $table->enum('application_status', ['Not started', 'Process start', 'Pending', 'Completed']);
            $table->enum('offer_status', ['Received', 'Pending',  'Unknown']);
            $table->enum('coe_status', ['Received', 'Pending', 'Unknown']);
            $table->foreignId('course_id')->nullable();
            $table->foreignId('institute_id')->nullable();
            $table->foreignId('city_id')->nullable();
            $table->boolean('active_status');
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
