<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class FilieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('filieres')->insert([
                'nom' => $faker->word(),  // Nom aléatoire
                'description' => $faker->paragraph(),  // Description aléatoire
                'debouches' => $faker->paragraph(),  // Débouchés aléatoires
                'liste_matiere' => $faker->words(5, true),  // Liste de matières (5 mots)
                'url_image' => $faker->imageUrl(),  // URL d'image aléatoire
                'horaire' => $faker->numberBetween(30, 40),  // Horaire aléatoire
                'referentiel' => $faker->word(),  // Référentiel aléatoire
                'frais_scolarite' => $faker->numberBetween(100000, 500000),  // Frais de scolarité
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
