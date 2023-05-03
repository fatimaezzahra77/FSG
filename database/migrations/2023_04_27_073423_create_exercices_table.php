<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exercices', function (Blueprint $table) {
            $table->id('idexercice');
            $table->foreignId('idseance');
            $table->string('titre');
            $table->string('contenu');
            $table->string('solution');
            $table->boolean('fait')->default(false); 
            $table->foreign('idseance')->references('idseance')->on('seances')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exercices');
    }
};
