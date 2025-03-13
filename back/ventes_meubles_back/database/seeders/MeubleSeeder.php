<?php

namespace Database\Seeders;

use App\Models\Meuble;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MeubleSeeder extends Seeder
{
    public function run(): void
    {

        $jsonData = file_get_contents(database_path('data/meubles_anciens.json'));
        $meubles = json_decode($jsonData, true)['meubles'];

        foreach ($meubles as $meuble) {
            // Insert main furniture record
            $meubleId = DB::table('meubles')->insertGetId([
                'nom' => $meuble['nom'],
                'type' => $meuble['type'],
                'hauteur' => $meuble['dimension']['hauteur'],
                'largeur' => $meuble['dimension']['largeur'],
                'profondeur' => $meuble['dimension']['profondeur'],
				'quantite' => $meuble['quantite'],
                'prix_ttc' => $meuble['prix_ttc'],
                'statut' => $meuble['statut'],
                'description' => $meuble['description'],
                'etat' => $meuble['etat'],
                'date_mise_en_ligne' => $meuble['date_mise_en_ligne'],
				'couleurs' => join(", ", $meuble['couleurs']),
				'matieres' => join(", ", $meuble['matieres']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    	}
	}
}
