<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('numero')->unique();
            $table->string('subtitle')->unique();
            $table->text('description')->nullable();
            $table->string('libelle')->unique();
            $table->string('lien')->unique();
            $table->string('image')->nullable();
            $table->enum("status",['brouillon', 'publier'])->default('brouillon');
            $table->boolean('active')->default(true);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
