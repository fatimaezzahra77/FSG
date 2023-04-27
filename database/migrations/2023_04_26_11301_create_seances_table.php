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
        Schema::create('seances', function (Blueprint $table) {
            $table->id('idseance');
            $table->foreignId('idgroup');
            $table->foreignId('idmodule');
            $table->foreignId('idprof');
            $table->string('nom');
            $table->string('description');
            $table->enum('type', ['presentiel', 'distanceil']);
            $table->date('date');
            $table->foreign('idgroup')->references('idgroup')->on('groupes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idmodule')->references('idmodule')->on('module')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idprof')->references('idprof')->on('prof')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seances');
    }
};
