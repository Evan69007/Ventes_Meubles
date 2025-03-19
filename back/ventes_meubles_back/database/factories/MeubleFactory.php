<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MeubleFactory extends Factory
{
	/**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->words(3, true),
            'type' => $this->faker->randomElement(['chaise', 'table', 'canapé', 'armoire', 'lit']),
            'couleurs' => json_encode($this->faker->randomElements(['rouge', 'bleu', 'vert', 'noir', 'blanc', 'gris'], $this->faker->numberBetween(1, 3))),
            'matieres' => json_encode($this->faker->randomElements(['bois', 'métal', 'verre', 'tissu', 'cuir', 'plastique'], $this->faker->numberBetween(1, 3))),
            'hauteur' => $this->faker->numberBetween(1, 500),
            'largeur' => $this->faker->numberBetween(1, 500),
            'profondeur' => $this->faker->numberBetween(1, 300),
			'quantite' => $this->faker->numberBetween(1, 300),
            'prix_ttc' => $this->faker->randomFloat(2, 50, 2000),
            'statut' => $this->faker->randomElement(['dispo', 'réservé', 'vendu']),
            'description' => $this->faker->paragraphs(3, true),
            'etat' => $this->faker->randomElement(['parfait', 'bon', 'mauvais']),
            'date_mise_en_ligne' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

