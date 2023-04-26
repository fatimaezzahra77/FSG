<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\exercise;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->id('idexercise');
            $table->string('titre');
            $table->text('contenu');
            $table->text('solution');
            $table->boolean('fait')->default(false);
            $table->unsignedBigInteger('idseance');
            $table->foreign('idseance')->references('id')->on('seances') -> onDelete('casacade') ->onUpdate('cascade');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('exercise');
    }
    
};
