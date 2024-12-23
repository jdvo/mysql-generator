<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DemoModel>
 */
class DemoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'name' => fake()->name(),
            'username' => fake()->userName(),
            'email' => fake()->email(),
            'ip_address' => fake()->ipv4(),
            'bio' => fake()->paragraph()
        ];
    }
}
