<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarrouselsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Insérer 10 éléments dans la table carrousels
        foreach (range(1, 10) as $index) {
            DB::table('carrousels')->insert([
                'description' => $faker->paragraph(),
                'url_image' => $faker->imageUrl(),
                'lien' => $faker->url(),
                'num_ordre' => $index,
                'isActif' => $faker->boolean(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
