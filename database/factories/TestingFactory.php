<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TestingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_uri' => Str::random(10),
            'date' => Str::random(10),
            'title' => Str::random(10),
            'sub_title' => Str::random(10),
            'question' => Str::random(10),
            'excerpt' => Str::random(10),
            'body' => Str::random(10)
        ];
    }
}
