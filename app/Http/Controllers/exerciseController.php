<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Seance;
use App\Models\exercise;
use Illuminate\Support\Facades\Validator;

class exerciseController extends Controller
{
    public function index()
    {
        $exercises = exercise::all();
        return view('exercise.index', compact('exercises'));
    }

    public function create()
    {
        $seances = Seance::all();
        return view('exercise.create', ['seances'=>$seances]);
    }

    public function store(Request $request)
    {
        $idseance=$request->input('idseance');
        $titre=$request->input('titre');
        $contenu=$request->input('contenu');
        $solution=$request->input('solution');
        // $fait= $request->has('fait');
        $validation = Validator::make($request->all(),
        [
            'idseance'=>'required|max:25',
            'titre'=>'required|max:25',
            'contenu'=>'required|max:25',
            'solution'=>'required|max:25',
            'fait' => 'nullable|boolean'
        ],
        [
            'idseance.required'=>'infos sont obligatoire',
            'titre.required'=>'libelle est obligatoire' ,
            'contenu.required'=>'libelle est obligatoire' ,
            'solution.required'=>'libelle est obligatoire' ,
            'fait.boolean' => 'fait doit être un booléen',
            'fait.nullable'=>'fait peut etre nullable'
        ]);
        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
        }
        exercise::create($request->post());
        // dd(exercise::all());
        return redirect()->route('exercises.index');
    }

    public function edit(string $id)
    {
        $seances = Seance::all();
        $exercises = exercise::findorFail($id);
        return view('exercise.edite', ['seances'=>$seances, 'exercises'=>$exercises]);
    }

    public function update(Request $request, string $id)
    {
        $exercise = exercise::findorFail($id);
        $exercise->idseance = $request->input('idseance');
        $exercise->titre = $request->input('titre');
        $exercise->contenu = $request->input('contenu');
        $exercise->solution = $request->input('solution');
        $exercise->fait = $request->has('fait');
        $exercise->save();
        return redirect()->route('exercises.index', ['exercise'=>$exercise]);
    }

    public function destroy(Exercise $exercise)
    {
        $exercise->delete();
        return redirect()->route('exercises.index', ['exercise'=>$exercise]);
    }
}

