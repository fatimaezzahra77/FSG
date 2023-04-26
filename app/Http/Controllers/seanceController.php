<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\Module;
use App\Models\Seance;
use App\Models\groupes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class seanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seance = Seance::all();

        return view('seances.index', ['seance'=>$seance]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groupes = groupes::all();
        $Prof = Prof::all();
        $Module=Module::all();
        return view('seances.create',['groupes'=>$groupes,'Module'=>$Module,'Prof'=>$Prof]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validation = Validator::make($request->all(),
        [
            'nom'=>'required|max:25',
            'description'=>'required',
            'date'=>'required',
            'type'=>'required'
            
        ],
        [
            'nom.required'=>'nom est obligatoire' ,
            'nom.max'=>'nom ne doit pas passer 25',
            'description.required'=>'description sont obligatoire',
            'type.required'=>'type est obligatoire'
        ]);
        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
        }
        Seance::create([
            'idgroup'=>$request->input('idgroup'),
            'idmodule'=>$request->input('idmodule'),
            'idprof'=>$request->input('idprof'),
            'nom'=>$request->input('nom'),
            'description'=>$request->input('description'),
            'date'=>$request->input('date'),
            'type'=>$request->input('type'),
        ]);
        return redirect()->route('seances.index');
        
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
        $groupes = groupes::all();
        $Prof = Prof::all();
        $Module=Module::all();
        $seance = Seance::findorFail($id);
        return view('seances.edit', ['seance'=>$seance,'groupes'=>$groupes,'Module'=>$Module,'Prof'=>$Prof]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = Validator::make($request->all(),
        [
            'nom'=>'required|max:25',
            'description'=>'required',
            'date'=>'required',
            'type'=>'required'
            
        ],
        [
            'nom.required'=>'nom est obligatoire' ,
            'nom.max'=>'nom ne doit pas passer 25',
            'description.required'=>'description sont obligatoire',
            'type.required'=>'type est obligatoire'
        ]);
        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
        }
        $Seance=Seance::findorFail($id);
        $Seance->idgroup=$request->input('idgroup');
        $Seance->idmodule=$request->input('idmodule');
        $Seance->idprof=$request->input('idprof');
        $Seance->nom=$request->input('nom');
        $Seance->description=$request->input('description');
        $Seance->date=$request->input('date');
        $Seance->type=$request->input('type');
        $Seance->save();
        return redirect()->route('seances.index')->with('message','seance bbien modifier');
    }
    

   
    public function destroy(string $id)
    {
        $Seance= Seance::find($id);
        $Seance->delete();
        return redirect()->route('seances.index');
        
    }
}
