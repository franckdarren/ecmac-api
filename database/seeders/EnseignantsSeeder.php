<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnseignantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enseignants = [];

        for ($i = 1; $i <= 10; $i++) {
            $enseignants[] = [
                'nom' => 'Enseignant ' . $i,
                'url_photo' => 'https://example.com/photos/enseignant' . $i . '.jpg',
                'email' => 'enseignant' . $i . '@example.com',
                'phone' => '077' . rand(100000, 999999),
                'diplomes' => 'Diplôme en Science ' . $i,
                'matieres' => 'Mathématiques, Physique',
                'isActif' => rand(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('enseignants')->insert($enseignants);
    }
}
