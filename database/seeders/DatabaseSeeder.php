<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AlbumsSeeder;
use Database\Seeders\NiveauxSeeder;
use Database\Seeders\FilieresSeeder;
use Database\Seeders\GaleriesSeeder;
use Database\Seeders\ActualitesSeeder;
use Database\Seeders\CarrouselsSeeder;
use Database\Seeders\EnseignantsSeeder;
use Database\Seeders\FiliereNiveauSeeder;
use Database\Seeders\EnseignantFiliereSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        $this->call(ActualitesSeeder::class);
        $this->call(CarrouselsSeeder::class);
        $this->call(AlbumsSeeder::class);
        $this->call(GaleriesSeeder::class);
        $this->call(FilieresSeeder::class);
        $this->call(NiveauxSeeder::class);
        $this->call(FiliereNiveauSeeder::class);
        $this->call(EnseignantsSeeder::class);
        $this->call(EnseignantFiliereSeeder::class);






    }
}
