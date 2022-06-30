<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    public $positions = [
        'Manager', 
        'CEO', 
        'Staff',    
        'Developer',
        'Teacher'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->positions as  $position) {
            DB::table('positions')->updateOrInsert([
                'name' => $position
            ]);
        }
    }
}
