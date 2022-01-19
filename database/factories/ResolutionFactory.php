<?php

/* @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories;

use App\Models\Resolution;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResolutionFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name'     => $this->faker->name(),
            'slug'     => $this->faker->slug(),
            'position' => $this->faker->randomNumber(),
        ];
    }
}
