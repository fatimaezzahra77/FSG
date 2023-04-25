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
        Schema::create('examen', function (Blueprint $table) {
            $table->id('idExamen');
            $table->foreignId('idgroup');
            $table->foreignId('idmodule');
            $table->date('date');
            $table->string('type');
            $table->foreign('idgroup')->references('idgroup')->on('groupes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idmodule')->references('idmodule')->on('module')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen');
    }
};
