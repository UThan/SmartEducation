<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\Student;
use App\Models\member;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory()->count(200)->create();
        member::factory()->count(50)->create();
        Partner::factory()->count(50)->create();
    }
}
