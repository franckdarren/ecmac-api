<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class GaleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Récupérer les IDs existants dans la table albums
        $albumIds = DB::table('albums')->pluck('id')->toArray();

        // Vérifier si la table albums n'est pas vide
        if (empty($albumIds)) {
            throw new \Exception("Aucun album existant dans la table 'albums'. Assurez-vous d'avoir des albums dans la base de données.");
        }

        // Insérer 10 éléments dans la table galeries
        foreach (range(1, 10) as $index) {
            DB::table('galeries')->insert([
                'url_image' => $faker->imageUrl(), // Génère une URL d'image aléatoire
                'description' => $faker->paragraph(), // Génère une description aléatoire
                'album_id' => $faker->randomElement($albumIds), // Attribue un album_id existant dans la base
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
