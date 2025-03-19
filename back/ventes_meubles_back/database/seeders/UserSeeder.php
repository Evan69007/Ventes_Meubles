<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class UserSeeder extends Seeder
{
    public function run(): void
    {

        $jsonData = file_get_contents(database_path('data/users.json'));

        $users = json_decode($jsonData, true);

        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make($userData['password'])
            ]);
            // Générer un token pour cet utilisateur
            $token = $user->createToken('AuthToken')->plainTextToken;
            // Afficher le token dans la console
            $this->command->info("Utilisateur {$user->email} créé avec le token : {$token}");
    	}
	}
}

