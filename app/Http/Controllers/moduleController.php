<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class moduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::all();
        return view('modules.index', ['modules'=>$modules]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules = Module::all();
        return view('modules.create', ['modules'=>$modules]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Module::create([
            'nom'=>$request->input('nom'),
        ]);
        return redirect()->route('modules.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $modules = Module::findorFail($id);
        return view('modules.edit', ['modules'=>$modules]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $module=Module::findorFail($id);
        $module->nom=$request->input('nom');
        $module->save();
        return redirect()->route('modules.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $module = Module::findorFail($id);
        $module->delete();
        return redirect()->route('modules.index');
    }
}
