<?php

namespace App\Http\Controllers;
use App\Models\Note;
use App\Models\Examen;
use App\Models\stagiaires;
use Illuminate\Http\Request;

class notesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', ['notes'=>$notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $examens = Examen::all();
        $stagiaires = stagiaires::all();
        return view('notes.create', ['examens'=>$examens, 'stagiaires'=>$stagiaires]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Note::create([
            'idstagiaire'=>$request->input('idstagiaire'),
            'idExamen'=>$request->input('idExamen'),
            'valeur'=>$request->input('valeur')
            ]);
           return redirect()->route('notes.index')->with('message','le stagiaire est bien ajouté');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
