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
        Schema::create('realisations', function (Blueprint $table) {
            $table->id('idrealisation');
            $table->foreignId('idexercice');
            $table->foreignId('idstagiaire');
            $table->float('note');
            $table->foreign('idexercice')->references('idexercice')->on('exercices')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idstagiaire')->references('idstagiaire')->on('stagiaires')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realisations');
    }
};
