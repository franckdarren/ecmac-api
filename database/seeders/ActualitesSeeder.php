<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class ActualitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Insérer 10 éléments dans la table actualites
        foreach (range(1, 10) as $index) {
            DB::table('actualites')->insert([
                'url_image' => $faker->imageUrl(),
                'description' => $faker->paragraph(),
                'jour' => $faker->date(),
                'heure' => $faker->time(),
                'lieu' => $faker->city(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
