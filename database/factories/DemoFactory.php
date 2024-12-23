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
            'title' => $this->faker()->title(),
            'name' => $this->faker()->name(),
            'username' => $this->faker()->userName(),
            'email' => $this->faker()->email(),
            'ip_address' => $this->faker()->ipv4(),
            'bio' => $this->faker()->paragraph()
        ];
    }
}
