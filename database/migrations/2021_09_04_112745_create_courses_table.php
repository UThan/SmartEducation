<?php

use App\Models\Course;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $courses = array('IT', 'Business', 'Project management', 'Leadership management', 'Business management', 'Commercial cookery', 'Automotive', 'Nursing', 'Community service', 'Aged cared');

        foreach ($courses as $name) {
            $course = new Course();
            $course->name = $name;
            $course->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
