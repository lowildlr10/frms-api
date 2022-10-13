<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $isDepecated = fake()->randomElement(['y', 'n']);

        return [
            'name' => fake()->catchPhrase(),
            'description' => fake()->paragraph(),
            'is_deprecated' => $isDepecated
        ];
    }
}
