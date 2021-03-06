<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => Course::factory(),
            'test_name' => Str::random(10),
            'EC' => $this->faker->numberBetween(5, 10),
            'lowest_passing_grade' => $this->faker->numberBetween(5, 10),
            'best_grade' => $this->faker->numberBetween(0, 10),
        ];
    }
}
