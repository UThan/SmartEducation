<?php

namespace Database\Seeders;

use App\Models\SalaryType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalaryTypeSeeder extends Seeder
{
    public $salarytypes = [
        'Monthly basis',
        'Freelence',
        'Internship',
        'On Job Training',
        'Project Basis'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->salarytypes as $salarytype) {
            DB::table('salary_types')->updateOrInsert([
                'name' => $salarytype,
            ]);
        }
    }
}
