<?php

namespace App\Http\Controllers;

use App\Models\groupes;
use App\Models\stagiaires;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class stagiairesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = stagiaires::with('group')->get();
        return view('stagiaires.index', ['stagiaires'=>$stagiaires]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groupes=groupes::all();//select * from categories
        // dd($groupes);
        return view('stagiaires.create',['groupes'=>$groupes]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       stagiaires::create([
        'idgroup'=>$request->input('idgroup'),
        'nom'=>$request->input('nom'),
        'prenom'=>$request->input('prenom')
        ]);
       
       return redirect()->route('stagiaires.index')->with('message','le stagiaire est bien ajouté');
    }
    /*
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
        $stagiaire =stagiaires::findorFail($id);
        return view('stagiaires.edit', ['groupes'=>$groupes, 'stagiaire'=>$stagiaire]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = Validator::make($request->all(),
        ['idgroup'=>'required',
        'nom'=>'required',
        'prenom'=>'required'
        ],
        [
        'idgroup.required' =>'idgroup est obligatoir',
        'nom.required'=>'nom est obligatoir',
        'prenom.required'=>'prenom est obligatoir'
        ]);
        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
        }
        $stagiaire = stagiaires::findorFail($id);
        $stagiaire->idgroup =$request->input('idgroup');   
        $stagiaire->nom = $request->input('nom');
        $stagiaire->prenom=$request->input('prenom');
        $stagiaire->save();
        return redirect()->route('stagiaires.index')->with('message', 'le stagiaire a ete bien modifie');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stagiaire = stagiaires::findorFail($id);
        $stagiaire->delete();
        return redirect()->route('stagiaires.index')->with('message', 'le stagiaire a ete bien supprime');
    }

    // display the select group formula :
    function afficherFilterstagiaires()
    {
        $groupes = groupes::all();
        return view('stagiaires.afficherFilterstagiaires',[ 'groupes'=>$groupes]);
    }

    // retreive the stagiaires of the group selected 
    function filterStagiaires(Request $request)
    {
        $groupes=groupes::all();
        $idgroup=$request->input('idgroup');
        $liststagiaire= DB::table('stagiaires')
        ->join('groupes','groupes.idgroup','=','stagiaires.idgroup')  
        ->where('stagiaires.idgroup','=',$idgroup)
        ->select(array("stagiaires.*"))
        ->get();
        return view('stagiaires.listStagiaires', ['stagiaires' => $liststagiaire]);
    }

    // display the group formula :
    function displayGroupNumStag()
    {
        $groupes = groupes::all();
        return view('stagiaires.displayGroupNumStag', ['groupes'=>$groupes]);
    }
    
    // count the number of the stagiaires in the group selected :
    function numStagiaire(Request $request){
        $groupes = groupes::all();
        $groupenombrestag = DB::table('stagiaires')
        ->join('groupes', 'groupes.idgroup', '=', 'stagiaires.idgroup')
        ->select(array('groupes.nom','groupes.idgroup' , DB::raw('Count(stagiaires.idstagiaire) as nombre')))
        ->groupBy('groupes.nom', 'groupes.idgroup')
        ->get();
        return view('stagiaires.nombreStagiaire', ['groupenombrestag'=>$groupenombrestag]);

    }
}
