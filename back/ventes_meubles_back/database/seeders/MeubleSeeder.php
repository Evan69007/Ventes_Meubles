<?php

namespace Database\Seeders;

use App\Models\Meuble;
use Illuminate\Database\Seeder;

class MeubleSeeder extends Seeder
{
    public function run(): void
    {

        Meuble::factory()->create([
            'nom' => 'Buffet Louis XV',
            'type' => 'Buffet',
            'couleurs' => "Bois naturel, Marron foncé",
            'matieres' => "Chêne massif",
			'hauteur' => 120,
			'largeur' => 180,
			'profondeur' => 50,
			'prix_ttc' => 1200.0,
			'description' => "Magnifique buffet Louis XV en chêne massif, sculpté à la main.",
			'date_mise_en_ligne' => "2025-03-10",
            'etat' => 'parfait',
            'statut' => 'dispo',
        ]);
    }
}
