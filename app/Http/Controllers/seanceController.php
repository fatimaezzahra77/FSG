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
        $seances = Seance::all();

        return view('seances.index', ['seances'=>$seances]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groupes = groupes::all();
<<<<<<< HEAD
        $Profes = Prof::all();
        $Modules=Module::all();
        return view('seances.create',['groupes'=>$groupes,'Modules'=>$Modules,'Profes'=>$Profes]);
=======
        $profes = Prof::all();
        $modules=Module::all();
        return view('seances.create',['groupes'=>$groupes,'modules'=>$modules,'profes'=>$profes]);
>>>>>>> 2ca3dd175d5ffe2a14e8346b1be7676309881405
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
        $profes = Prof::all();
        $modules=Module::all();
        $seances = Seance::findorFail($id);
        return view('seances.edit', ['seances'=>$seances,'groupes'=>$groupes,'modules'=>$modules,'profes'=>$profes]);
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
        $Seances=Seance::findorFail($id);
        $Seances->idgroup=$request->input('idgroup');
        $Seances->idmodule=$request->input('idmodule');
        $Seances->idprof=$request->input('idprof');
        $Seances->nom=$request->input('nom');
        $Seances->description=$request->input('description');
        $Seances->date=$request->input('date');
        $Seances->type=$request->input('type');
        $Seances->save();
        return redirect()->route('seances.index')->with('message','seance bbien modifier');
    }
    

   
    public function destroy(string $id)
    {
        $Seances= Seance::find($id);
        $Seances->delete();
        return redirect()->route('seances.index');
        
    }
}
