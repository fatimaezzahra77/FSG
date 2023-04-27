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

    public function store(Request $request)
    {
        Note::create([
            'idstagiaire'=>$request->input('idstagiaire'),
            'idExamen'=>$request->input('idExamen'),
            'valeur'=>$request->input('valeur')
        ]);
           
        return redirect()->route('notes.index')->with('message','le stagiaire est bien ajouté');
    }

    public function edit(string $id)
    {
        $note=Note::findorFail($id);
        $examens = Examen::all();
        $stagiaires = stagiaires::all();
        return view('notes.edit', ['examens'=>$examens, 'stagiaires'=>$stagiaires, 'note'=>$note]);
    }

    public function update(Request $request, string $id)
    {
        $note = Note::findorFail($id);
        $note->idstagiaire =$request->input('idstagiaire');   
        $note->idExamen =$request->input('idExamen');   
        $note->valeur = $request->input('valeur');
        $note->save();
        return redirect()->route('notes.index')->with('message', 'le note a ete bien modifie');
    }

    public function destroy(string $id)
    {
        $note=Note::findorFail($id);
        $note->delete();
        return redirect()->route('notes.index')->with('success', 'Le professeur a été supprimé avec succès.');
    }
}
