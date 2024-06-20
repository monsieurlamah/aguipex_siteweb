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
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fonction');
            $table->string('image');
            $table->string('lienLinkdln')->nullable();
            $table->string('lienTwitter')->nullable();
            $table->string('email');
            $table->string('contact');
            $table->enum("status",['brouillon', 'publier'])->default('brouillon');
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipes');
    }
};
