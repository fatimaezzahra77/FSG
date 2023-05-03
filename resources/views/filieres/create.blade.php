

@extends('layout')
@section('content')
<div class="card">
  <div class="card-header"> Ajouter un filiere</div>
  <div class="card-body">
  <form action="{{Route('filieres.store')}}" method="post">
  @csrf
    <label for="libeller">Libelle</label><br>
    <input type="text" name="libelle" id="input"  placeholder="inserer la filiere " class="form-control"/><br><br>
    @error('libelle')
    <span style="color: red;">{{'*'.$message}}</span><br><br>
    @enderror
    <label for="nom">Infos</label><br>
    <input type="text" name="infos" id="input"  placeholder="inserer les ioformations" class="form-control"/><br><br>
    @error('description')
    <span style="color: red;">{{'*'.$message}}</span>
    @enderror
    <br>
    <input type="submit" value="Submit" class="btn btn-success"/>

        <a href="{{ url('/filieres') }}" class="btn btn-success btn-sm" title="Add New filieres">
          <i class="fa fa-plus" aria-hidden="true"></i> Back
            </a>
    </form>
 
  </div>
</div>
@stop