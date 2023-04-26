<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profController;
use App\Http\Controllers\examenController;
use App\Http\Controllers\moduleController;
use App\Http\Controllers\seanceController;
use App\Http\Controllers\groupesController;

// Route::get('prof/{prof}/edit', [profController::class, 'edit'])->name('prof.edit');
// Route::put('prof/{prof}', [profController::class, 'update'])->name('prof.update');
// Route::delete('prof/{prof}', [profController::class, 'destroy'])->name('prof.destroy');
use App\Http\Controllers\filieresController;
use App\Http\Controllers\stagiairesController;


Route::get('stagiaires/groupes',[stagiairesController::class,'afficherFilterstagiaires'])->name('stagiaires.afficherFilterstagiaires');
Route::get('stagiaires/filter', [stagiairesController::class, 'filterStagiaires'])->name('stagiaires.filterStagiaires');
Route::get('groupes/filiere', [groupesController::class, 'displayFiliere'])->name('groupes.displayFiliere');
Route::get('groupes/filter', [groupesController::class, 'filterStagiaires'])->name('groupes.filterStagiaires');
Route::get('stagiaires/numgroup', [stagiairesController::class, 'displayGroupNumStag'])->name('stagiaires.displayGroupNumStag');
Route::get('stagiaires/filternumber', [stagiairesController::class, 'numStagiaire'])->name('stagiaires.numStagiaire');
Route::resource('filieres', filieresController::class);
Route::resource('groupes', groupesController::class);
Route::resource('stagiaires', stagiairesController::class);
Route::resource('profes', profController::class);
Route::resource('modules', moduleController::class);
Route::resource('examens', examenController::class);
Route::resource('seances', seanceController::class);
Route::get('/', function () {
    return view('welcome');
});

