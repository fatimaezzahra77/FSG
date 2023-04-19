<?php

use App\Models\stagiaires;
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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id('idstagiaire');
            $table->foreignId('idgroup');
            // $table->unsignedBigInteger('idgroup'); 
            $table->foreign('idgroup')->references('idgroup')->on('groupes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nom');
            $table->string('prenom');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
