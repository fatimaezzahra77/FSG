<?php

namespace App\Http\Controllers;

use App\Models\exercise;
use App\Models\stagiaires;
use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $realisations = Realisation::all();
        return view('realisations.index', ['realisations'=>$realisations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $exercices=exercise::all();
        $stagiaires=stagiaires::all();
        return view('realisations.create',['exercices'=>$exercices, 'stagiaires'=>$stagiaires]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Realisation::create([
            'idexercice'=>$request->input('idexercice'),
            'idstagiaire'=>$request->input('idstagiaire'),
            'note'=>$request->input('note'),
            ]);
        return redirect()->route('realisations.index')->with('message','le groupe est bien ajouté');
    }

    /**
     * Display the specified resource.
     */
    public function show(Realisation $realisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $realisation = Realisation::findorFail($id); 
        $exercices=exercise::all();
        $stagiaires=stagiaires::all();
        return view('realisations.edit',['exercices'=>$exercices, 'stagiaires'=>$stagiaires, 'realisation'=>$realisation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $realisation = Realisation::findorFail($id);
        $realisation->idexercice=$request->input('idexercice');
        $realisation->idstagiaire=$request->input('idstagiaire');
        $realisation->note=$request->input('note');
        $realisation->save();
     //    dd($group);
        return redirect()->route('realisations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $realisation = Realisation::findorFail($id);
        $realisation->delete();
        return redirect()->route('realisations.index');
    }
}
