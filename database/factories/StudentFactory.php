<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
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
            'email' => $this->faker->unique()->safeEmail(),
            'phone'=> $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'visa_status'=> $this->faker->randomElement(['Not started','Process start','Pending','Completed']),
            'application_status'=> $this->faker->randomElement(['Not started','Process start','Pending','Completed']),
            'offer_status'=> $this->faker->randomElement(['Unknown','Received','Pending']),
            'coe_status'=> $this->faker->randomElement(['Unknown','Received','Pending']),
            'course_id'=> $this->faker->numberBetween(1,10),
            'level_test'=> $this->faker->boolean(60),
            'institute_id'=> $this->faker->numberBetween(1,4),
            'targeted_city_id'=> $this->faker->numberBetween(1,3),            
        ];
    }
}
