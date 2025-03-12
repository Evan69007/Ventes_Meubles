<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

	
    public function run(): void
    {
        $jsonData = file_get_contents(database_path('data/meubles_anciens.json'));
        $meubles = json_decode($jsonData, true)['meubles'];

		foreach ($meubles as $meuble) {
            // Insert main furniture record
			foreach ($meuble['photos'] as $key => $value)
				{
				$meubleId = DB::table('photos')->insertGetId([
						'meubles_id' => $meuble['id'],
						'type' => $key,
						'url' => $value,
						'created_at' => Carbon::now(),
                		'updated_at' => Carbon::now(),
				]);
			}
    	}
    }
}
