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

        $meubles = json_decode($jsonData, true);

        foreach ($meubles as $meuble) {
            // Insert main furniture record
            $meubleId = DB::table('meubles')->insertGetId([
                'nom' => $meuble['nom'],
                'type' => $meuble['type'],
                'hauteur' => $meuble['hauteur'],
                'largeur' => $meuble['largeur'],
                'profondeur' => $meuble['profondeur'],
				'quantite' => $meuble['quantite'],
                'prix_ttc' => $meuble['prix_ttc'],
                'statut' => $meuble['statut'],  
                'description' => $meuble['description'],
                'etat' => $meuble['etat'],
                'date_mise_en_ligne' => $meuble['date_mise_en_ligne'],
				'couleurs' =>  $meuble['couleurs'],
				'matieres' =>  $meuble['matieres'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    	}
	}
}
