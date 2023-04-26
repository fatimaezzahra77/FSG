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
        @foreach($Module as $Module)
        <option value="{{$Module->idmodule}}">{{$Module->nom}}</option>
        @endforeach
    </select><br/>    
    prof:

    <select  name="idprof" class="from-select"  aria-label="Default select example">
        @foreach($Prof as $Prof)
        <option value="{{$Prof->Prof}}">{{$Prof->nom}}</option>
        @endforeach
    </select><br/>
    <label>nom</label><br>
    <input type="text" name="nom" id="input" class="from-control" /><br>
    <label>type</label><br>
    <input type="radio" name="radioB" id="radio" />Présentiel<br>
    <input type="radio" name="radioB" id="radio" />distanceil<br>
    <label>description</label><br>
    <textarea name="description" id="" cols="10" rows="2"></textarea>
    <label>date</label><br>
    <input type="Date" name="date" id="input" class="from-control"/><br>
    <input type="submit" name="ajouter"  class="btn btn-success btn-sm" /><br>
</from>
</div>
</div>
@stop

































