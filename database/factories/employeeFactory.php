<?php

namespace Database\Factories;

use App\Models\companie;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'=>$this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'Company'=>companie::all()->random()->id,
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->phoneNumber()
        ];
    }
}
