<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CU_code' => $this->faker->text(),
            'name' => $this->faker->name(),
            'credits' => $this->faker->randomFloat(3, 1, 2),
            'passed_at' => now()
        ];
    }
}
