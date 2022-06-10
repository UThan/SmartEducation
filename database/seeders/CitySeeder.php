<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    public $cities = [
        'Melbourne', 
        'Sydney', 
        'Perth',         
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->cities as $city) {
            DB::table('cities')->updateOrInsert([
                'name' => $city
            ]);
        }
    }
}
