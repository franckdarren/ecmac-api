<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnseignantFiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enseignantIds = DB::table('enseignants')->pluck('id')->toArray();
        $filiereIds = DB::table('filieres')->pluck('id')->toArray();

        foreach ($enseignantIds as $enseignantId) {
            // Associer chaque enseignant à 1 ou 2 filières choisies au hasard
            $filieresAssign = array_rand($filiereIds, min(2, count($filiereIds)));
            $filieresAssign = is_array($filieresAssign) ? $filieresAssign : [$filieresAssign];

            foreach ($filieresAssign as $filiereIndex) {
                DB::table('enseignant_filiere')->insert([
                    'enseignant_id' => $enseignantId,
                    'filiere_id' => $filiereIds[$filiereIndex],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
