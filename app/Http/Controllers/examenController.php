<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class examenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Examen = Examen::all();
        return view('Examens.index', ['Examen'=>$Examen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Examens.create');
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
        Examen::create($request->post());
        return redirect()->route('Examens.index');
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
        $Examen = Examen::findorFail($id);
        return view('Examens.edit', ['Examen'=>$Examen]);
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
           $Examen->date=$request->input('date');
           $Examen->type=$request->input('type');
           $Examen->save();
           return redirect()->route('Examens.index')->with('message','la Examens est bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Examen = Examen::find($id);
        $Examen->delete();
        return redirect()->route('Examens.index');
    }
}
