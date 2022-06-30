<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'position_id' => $this->faker->numberBetween(1,4),
            'salary'=> $this->faker->numberBetween(100000,200000),  
            'salary_type_id' => $this->faker->numberBetween(1,4),       
            'start_date'=> $this->faker->date('Y-m-d'),                
        ];
    }
}
