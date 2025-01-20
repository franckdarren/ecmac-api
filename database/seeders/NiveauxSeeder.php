<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NiveauxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $niveaux = [
            ['nom' => 'Licence 1', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Licence 2', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Licence 3', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Master 1', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Master 2', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('niveaux')->insert($niveaux);
    }
}
