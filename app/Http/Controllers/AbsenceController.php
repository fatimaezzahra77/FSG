<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use App\Models\Seance;
use App\Models\Absence;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Absence = Absence::all();
        return view('absences.index', ['Absence'=>$Absence]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Seance=Seance::all();
      
        return view('absences.create',['Seance'=>$Seance]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),
        [
            'nbrHeur'=>'required',
          
        ],
        [
            'nbrHeur.required'=>'nbrHeur est obligatoire' ,
       
        ]);
        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
        }
        Absence::create([
            'idseance'=>$request->input('idseance'),
           
            'nbrHeur'=>$request->input('nbrHeur'),
       
        ]);
        return redirect()->route('absences.index');
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
        $Seance=Seance::all();
       
        $Absence = Absence::findorFail($id);
        return view('absences.edit', ['Absence'=>$Absence,'Seance'=>$Seance]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation=Validator::make($request->all(),
        [
            'nbrHeur'=>'required',
        ],
        [
            'nbrHeur.required'=>'nbrHeur est obligatoire' ,
        ]
        );
        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
           }

           $Absence=Absence::findorFail($id);
           $Absence->idseance=$request->input('idseance');
           $Absence->nbrHeur=$request->input('nbrHeur');
           $Absence->save();
           return redirect()->route('absences.index')->with('message','absences est bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Absence = Absence::find($id);
        $Absence->delete();
        return redirect()->route('absences.index');
    }
}
