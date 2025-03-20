<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Panier>
 */
class PanierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'meubles_id' => $this->faker->numberBetween(1, 6),
            'users_id' => $this->faker->numberBetween(1, 8),
			'created_at' => Carbon::now(),
        ];
    }
}
