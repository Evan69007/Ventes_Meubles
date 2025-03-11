<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'meuble_id' => $this->faker->numberBetween(1, 999),
			'type' => $this->faker->randomElement(['principale', 'secondaire']),
			'url' => $this->faker->Str::random(50),
        ];
    }
}
