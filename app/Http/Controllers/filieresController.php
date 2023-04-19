<?php

namespace App\Http\Controllers;

use App\Models\filieres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class filieresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filieres = filieres::all();
        return view('filieres.index', ['filieres'=>$filieres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filieres.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libelle=$request->input('libelle');
        $infos=$request->input('infos');
        $validation = Validator::make($request->all(),
        [
            'libelle'=>'required|max:25',
            'infos'=>'required'
        ],
        [
            'libelle.required'=>'libelle est obligatoire' ,
            'libelle.max'=>'libelle ne doit pas passer 25',
            'infos.required'=>'infos sont obligatoire'
        ]);
        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
        }
        filieres::create($request->post());
        return redirect()->route('filieres.index');
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
        $filiere = filieres::findorFail($id);
        return view('filieres.edit', ['filiere'=>$filiere]);
    }
    // Update the specified resource in storage.

    public function update(Request $request, string $id)
    {
        $validation=Validator::make($request->all(),
        [
            'libelle'=>'required|max:25',
            'infos'=>'required'
        
        ],
        [
            'libelle.required'=>'le nom est obligatoire',
            'libelle.max'=>'le nom ne doit pas dépassé 25 caractères',
            'infos.required'=>'la description est obligatoire'

        ]
        );
        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
           }

           $filiere=filieres::findorFail($id);
           $filiere->libelle=$request->input('libelle');
           $filiere->infos=$request->input('infos');
           $filiere->save();
           return redirect()->route('filieres.index')->with('message','la filiere est bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $filiere = filieres::find($id);
        $filiere->delete();
        return redirect()->route('filieres.index');    
    }
}
