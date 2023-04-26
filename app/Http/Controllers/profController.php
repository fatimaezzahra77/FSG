<?php

namespace App\Http\Controllers;
use App\Models\Prof;
use Illuminate\Http\Request;

class profController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $prof = Prof::all();

        return view('prof.index', compact('prof'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prof.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:prof',
            'password'=>'required'
        ]);
    
        Prof::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'password'=>$request->input('password')
        ]);

        return redirect()->route('profes.index')->with('success', 'Le professeur a été créé avec succès.');
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
    

    /**
     * Update the specified resource in storage.
     */
    public function edit(string $id)
    {
        $prof=Prof::findorFail($id);
        return view('prof.edit', ['prof'=>$prof]);
    }
     public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:prof,email',
            'password' => 'nullable|min:6',
        ]);
    
        $prof=Prof::findorFail($id);
        $prof->nom = $request->nom;
        $prof->prenom = $request->prenom;
        $prof->email=$request->email;
        $prof->password=$request->password;
        $prof->save();
        return redirect()->route('profes.index')->with('success', 'Le professeur a été modifié avec succès.');
    }    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $prof=Prof::findorFail($id);
        $prof->delete();
        return redirect()->route('profes.index')->with('success', 'Le professeur a été supprimé avec succès.');
    }
    
}
