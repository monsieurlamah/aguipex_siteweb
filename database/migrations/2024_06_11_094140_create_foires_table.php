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
        Schema::create('foires', function (Blueprint $table) {
            $table->id();
            $table->string('designation')->unique();
            $table->text('description')->nullable();
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->string('pays');
            $table->string('lieu');
            $table->enum("type",['FOIRE_INTERNATIONALE', 'FOIRE_NATIONALE']);
            $table->integer('nbre_produit_vendu')->nullable();
            $table->integer('nbre_personne_finance')->nullable();
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
        Schema::dropIfExists('foires');
    }
};
