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
        Schema::create('bas_slides', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('icone');
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
        Schema::dropIfExists('bas_slides');
    }
};
