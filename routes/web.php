<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profController;
use App\Http\Controllers\moduleController;
use App\Http\Controllers\groupesController;
use App\Http\Controllers\filieresController;
use App\Http\Controllers\stagiairesController;
<<<<<<< HEAD
// Route::get('prof/{prof}/edit', [profController::class, 'edit'])->name('prof.edit');
// Route::put('prof/{prof}', [profController::class, 'update'])->name('prof.update');
// Route::delete('prof/{prof}', [profController::class, 'destroy'])->name('prof.destroy');
=======
use App\Http\Controllers\examenController;
Route::get('prof/{prof}/edit', [ProfController::class, 'edit'])->name('prof.edit');
Route::put('prof/{prof}', [ProfController::class, 'update'])->name('prof.update');
Route::delete('prof/{prof}', [ProfController::class, 'destroy'])->name('prof.destroy');


>>>>>>> 9c139ed45b09744c83bcb32e398b6a63dfe531a5

Route::resource('profes', profController::class);
Route::get('stagiaires/groupes',[stagiairesController::class,'afficherFilterstagiaires'])->name('stagiaires.afficherFilterstagiaires');
Route::get('stagiaires/filter', [stagiairesController::class, 'filterStagiaires'])->name('stagiaires.filterStagiaires');
Route::get('groupes/filiere', [groupesController::class, 'displayFiliere'])->name('groupes.displayFiliere');
Route::get('groupes/filter', [groupesController::class, 'filterStagiaires'])->name('groupes.filterStagiaires');
Route::get('stagiaires/numgroup', [stagiairesController::class, 'displayGroupNumStag'])->name('stagiaires.displayGroupNumStag');
Route::get('stagiaires/filternumber', [stagiairesController::class, 'numStagiaire'])->name('stagiaires.numStagiaire');
Route::resource('filieres', filieresController::class);
Route::resource('groupes', groupesController::class);
Route::resource('stagiaires', stagiairesController::class);
Route::resource('modules', moduleController::class);
Route::resource('Examens', examenController::class);
Route::get('/', function () {
    return view('welcome');
});

