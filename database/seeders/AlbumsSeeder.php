<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Insérer 10 éléments dans la table albums
        foreach (range(1, 10) as $index) {
            DB::table('albums')->insert([
                'thematique' => $faker->word(), // Génère un mot aléatoire pour 'thematique'
                'description' => $faker->paragraph(), // Génère un paragraphe aléatoire pour 'description'
                'isActif' => $faker->boolean(), // Génère un booléen aléatoire pour 'isActif'
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
