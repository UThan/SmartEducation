<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public $courses = [
        'IT', 
        'Business', 
        'Project Management', 
        'Leadership Management',
        'Business Management',
        'Commercial cookery', 
        'Automotive',
        'Nursing',
        'Community Service',
        'Aged Cared'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->courses as $course) {
            DB::table('courses')->updateOrInsert([
                'name' => $course
            ]);
        }
    }
}
