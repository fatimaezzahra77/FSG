<?php

namespace App\Http\Controllers;

use App\Models\groupes;
use App\Models\filieres;
use App\Models\stagiaires;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class groupesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupes = groupes::with('filieres')->get();
        return view('groupes.index', ['groupes'=>$groupes]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres=filieres::all();//select * from categories
        // dd($filieres);
        return view('groupes.create',['filieres'=>$filieres]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       groupes::create([
        'nom'=>$request->input('nom'),
        'idfiliere'=>$request->input('idfiliere')
        ]);
       return redirect()->route('groupes.index')->with('message','le groupe est bien ajouté');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $groupes = groupes::findorFail($id);
        $filieres = filieres::all();
        return view('groupes.edit', ['groupes'=>$groupes, 'filieres'=>$filieres]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation=Validator::make($request->all(),
        [
            'idfiliere'=>'required',
            'nom'=>'required'
        ],
        [
            'idfiliere.required'=>'libelle est obligatoire',
            'nom.required'=>'la description est obligatoire'
        ]);
        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
           }
           $group=groupes::findorFail($id);
           $group->idfiliere=$request->input('idfiliere');
           $group->nom=$request->input('nom');
           $group->save();
        //    dd($group);
           return redirect()->route('groupes.index')->with('message','le group est bien modifié');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $group = groupes::find($id);
        $group->delete();
        return redirect()->route('groupes.index');
    }

    // display the formula of select filiere:
        public function displayFiliere(){
            $filiere = filieres::all();
            return view('groupes.displayFiliere', ['filiere'=>$filiere]);
        }

    // retreive the stagiaires of the same filiere:
    public function filterStagiaires(Request $request){
        $filieres = filieres::all();
        $stagiaire = stagiaires::all(); 
        $idfiliere = $request->input('idfiliere');
        $listeStagiaire = DB::table('groupes')
        ->join('filieres', 'filieres.idfiliere', '=', 'groupes.idfiliere')
        ->where('groupes.idfiliere', '=', $idfiliere)
        ->join('stagiaires' , 'stagiaires.idgroup', '=' , 'groupes.idgroup')
        ->select(array('stagiaires.*'))
        ->get();
        return view('groupes.listeStagiaire', ['stagiaires'=>$listeStagiaire]);
    }
}


































