<?php
use App\Models\Exercise;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();
        return view('exercises.index', compact('exercises'));
    }

    public function create()
    {
        return view('exercises.create');
    }

    public function store(Request $request)
    {
        $exercise = new Exercise;
        $exercise->titre = $request->input('titre');
        $exercise->contenu = $request->input('contenu');
        $exercise->solution = $request->input('solution');
        $exercise->fait = $request->has('fait');
        $exercise->seance_id = $request->input('seance_id');
        $exercise->save();

        return redirect()->route('exercises.index');
    }

    public function show(Exercise $exercise)
    {
        return view('exercises.show', compact('exercise'));
    }

    public function edit(Exercise $exercise)
    {
        return view('exercises.edit', compact('exercise'));
    }

    public function update(Request $request, Exercise $exercise)
    {
        $exercise->titre = $request->input('titre');
        $exercise->contenu = $request->input('contenu');
        $exercise->solution = $request->input('solution');
        $exercise->fait = $request->has('fait');
        $exercise->seance_id = $request->input('seance_id');
        $exercise->save();

        return redirect()->route('exercises.show', $exercise);
    }

    public function destroy(Exercise $exercise)
    {
        $exercise->delete();

        return redirect()->route('exercises.index');
    }
}
