<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nev' => $this->faker->unique()->city(),
            'orszag' => $this->faker->country(),
            'lakossag' => $this->faker->numberBetween(3, 10) * 10000
        ];
    }
}
