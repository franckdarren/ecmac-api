<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FiliereNiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filiereIds = DB::table('filieres')->pluck('id')->toArray();
        $niveauIds = DB::table('niveaux')->pluck('id')->toArray();

        foreach ($filiereIds as $filiereId) {
            $niveauId = $niveauIds[array_rand($niveauIds)]; // Choisir un niveau au hasard
            DB::table('filiere_niveau')->insert([
                'filiere_id' => $filiereId,
                'niveau_id' => $niveauId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
