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
        $prof = Prof::all();
        return view('prof.create', ['prof'=>$prof]);
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
            'password' => 'required|min:6',
        ]);
    
        Prof::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        return redirect()->route('prof.index')->with('success', 'Le professeur a été créé avec succès.');
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
    public function edit(Prof $prof)
    {
        return view('prof.edit', compact('prof'));
    }
     public function update(Request $request, Prof $prof)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:prof,email,'.$prof->id,
            'password' => 'nullable|min:6',
        ]);
    
        $prof->nom = $request->nom;
        $prof->prenom = $request->prenom;
        $prof->email = $request->email;
        if (!empty($request->password)) {
            $prof->password = bcrypt($request->password);
        }
        $prof->save();
    
        return redirect()->route('prof.index')->with('success', 'Le professeur a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prof $prof)
    {
        $prof->delete();
    
        return redirect()->route('prof.index')->with('success', 'Le professeur a été supprimé avec succès.');
    }
    
}
