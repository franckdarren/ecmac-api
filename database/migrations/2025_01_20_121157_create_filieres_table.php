<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filieres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->longText('description');
            $table->longText('debouches')->nullable();
            $table->string('liste_matiere')->nullable();
            $table->string('url_image')->nullable();
            $table->integer('horaire');
            $table->string('referentiel')->nullable();
            $table->integer('frais_scolarite');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filieres');
    }
};
