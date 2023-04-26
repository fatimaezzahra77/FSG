<?php

namespace App\Http\Controllers;

use App\Models\Examen;

use App\Models\Module;

use App\Models\groupes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class examenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Examen = Examen::all();
        return view('examens.index', ['Examen'=>$Examen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groupes=groupes::all();
        $Module=Module::all();
        return view('examens.create',['groupes'=>$groupes,'Module'=>$Module]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),
        [
            'date'=>'required',
            'type'=>'required'
        ],
        [
            'date.required'=>'date est obligatoire' ,
       
            'type.required'=>'type est obligatoire'
        ]);
        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
        }
        Examen::create([
            'idgroup'=>$request->input('idgroup'),
            'idmodule'=>$request->input('idmodule'),
            'date'=>$request->input('date'),
            'type'=>$request->input('type'),
        ]);
        return redirect()->route('examens.index');
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
        $groupes=groupes::all();
        $Module=Module::all();
        $Examen = Examen::findorFail($id);
        return view('examens.edit', ['Examen'=>$Examen,'groupes'=>$groupes,'Module'=>$Module]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation=Validator::make($request->all(),
        [
            'date'=>'required',
            'type'=>'required'
        
        ],
        [
            'date.required'=>'date est obligatoire' ,
       
            'type.required'=>'type est obligatoire'

        ]
        );
        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
           }

           $Examen=Examen::findorFail($id);
           $Examen->idgroup=$request->input('idgroup');
           $Examen->idmodule=$request->input('idmodule');
           $Examen->date=$request->input('date');
           $Examen->type=$request->input('type');
           $Examen->save();
           return redirect()->route('examens.index')->with('message','la Examens est bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Examen = Examen::find($id);
        $Examen->delete();
        return redirect()->route('examens.index');
    }
    
}
