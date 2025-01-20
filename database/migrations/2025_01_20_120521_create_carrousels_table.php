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
        Schema::create('carrousels', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->string('url_image');
            $table->string('lien')->nullable();
            $table->integer('num_ordre');
            $table->boolean('isActif')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrousels');
    }
};
