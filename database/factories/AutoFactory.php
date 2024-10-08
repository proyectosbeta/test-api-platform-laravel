<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auto>
 */
class AutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'make' => $this->faker->randomElement(['Toyota', 'Ford', 'BMW', 'Tesla', 'Honda']),
            'model' => $this->faker->word(),
            'year' => $this->faker->year(),
            'color' => $this->faker->optional()->safeColorName(),
        ];
    }
}
