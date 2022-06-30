<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
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
            'type'=> $this->faker->randomElement(['official','partner','university','agent']),            
            'annual_tution_fees'=> $this->faker->numberBetween(10000,50000),
            'scholarship_offer'=> $this->faker->boolean(),
            'commission_rate'=> $this->faker->numberBetween(1000,5000),
            'agreement_date'=> $this->faker->date('Y-m-d'),
            'end_date'=> $this->faker->date('Y-m-d'),           
        ];
    }
}
