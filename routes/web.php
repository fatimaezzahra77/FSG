<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\moduleController;
use App\Http\Controllers\groupesController;
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
Route::resource('modules', moduleController::class);
Route::get('/', function () {
    return view('welcome');
});

