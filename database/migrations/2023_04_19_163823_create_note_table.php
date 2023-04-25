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
        Schema::create('note', function (Blueprint $table) {
            $table->id('idnote');
            $table->foreignId('idExamen');
            $table->foreignId('idstagiaire');
            $table->float('valeur');
            $table->foreign('idExamen')->references('idExamen')->on('examen')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idstagiaire')->references('idstagiaire')->on('stagiaires')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('note');
    }
};
