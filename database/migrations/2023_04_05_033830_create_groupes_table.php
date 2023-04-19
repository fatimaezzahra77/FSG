<?php

use App\Models\groupes;
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
        Schema::create('groupes', function (Blueprint $table) {
            $table->id('idgroup');
            $table->foreignId('idfiliere');
            $table->foreign('idfiliere')->references('idfiliere')->on('filieres')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nom');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupes');
    }
};
