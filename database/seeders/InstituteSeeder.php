<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstituteSeeder extends Seeder
{
    public $institutes = [
        'ACBI', 
        'ATMC', 
        'Strathfield College',    
        'AA Poly'     
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->institutes as $institute) {
            DB::table('institutes')->updateOrInsert([
                'name' => $institute
            ]);
        }
    }
}
