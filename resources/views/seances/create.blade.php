@extends('layout')
@section('content')

<div class="card">    
<div class="card-header">Inserer une seance :</div>
<div class="card-body">
<form  action="{{Route('seances.store')}}" method="POST">
    @csrf
    groupe:

    <select  name="idgroup" class="from-select"  aria-label="Default select example">
        @foreach($groupes as $groupe)
        <option value="{{$groupe->idgroup}}">{{$groupe->nom}}</option>
        @endforeach
        </select><br/>

    module:

    <select  name="idmodule" class="from-select"  aria-label="Default select example">
<<<<<<< HEAD
        @foreach($Modules as $Module)
        <option value="{{$Module->idmodule}}">{{$Module->nom}}</option>
=======
        @foreach($modules as $module)
        <option value="{{$module->idmodule}}">{{$module->nom}}</option>
>>>>>>> 2ca3dd175d5ffe2a14e8346b1be7676309881405
        @endforeach
    </select><br/>    
    prof:

    <select  name="idprof" class="from-select"  aria-label="Default select example">
<<<<<<< HEAD
        @foreach($Profes as $Prof)
        <option value="{{$Prof->idprof}}">{{$Prof->nom}}</option>
=======
        @foreach($profes as $profe)
        <option value="{{$profe->idprof}}">{{$profe->nom}}</option>
>>>>>>> 2ca3dd175d5ffe2a14e8346b1be7676309881405
        @endforeach
    </select><br/>
    <label>nom</label><br>
    <input type="text" name="nom" id="input" class="from-control" /><br>
    @error('nom')
       <span style="color:red;">{{$message}}
       @enderror
    <label>type</label><br>
<<<<<<< HEAD
    <input type="radio" name="presentiel" id="radio" />Présentiel<br>
    <input type="radio" name="distanceil" id="radio" />distanceil<br>
=======
    <input type="radio" name=""  />Présentiel<br>
    <input type="radio" name=""  />distanceil<br>
    @error('type')
       <span style="color:red;">{{$message}}
       @enderror
>>>>>>> 2ca3dd175d5ffe2a14e8346b1be7676309881405
    <label>description</label><br>
    <textarea name="description" id="" cols="10" rows="2"></textarea>
    @error('description')
       <span style="color:red;">{{$message}}
       @enderror
    
    
    <label>date</label><br>
    <input type="Date" name="date" id="input" class="from-control"/><br>
<<<<<<< HEAD
    <input type="submit" value="ajouter"  class="btn btn-success btn-sm" /><br>
=======
    @error('date')
       <span style="color:red;">{{$message}}
       @enderror
    <input type="submit" name="ajouter"  class="btn btn-success btn-sm" /><br>
>>>>>>> 2ca3dd175d5ffe2a14e8346b1be7676309881405
</from>
@if(session('message'))
     <span>{{session('message')}}</span>
     @endif<br>
</div>
</div>
@stop

































