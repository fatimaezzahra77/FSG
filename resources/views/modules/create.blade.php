

@extends('layout')
@section('content')
<div class="card">
  <div class="card-header"> Ajouter un modules</div>
  <div class="card-body">
  <form action="{{Route('modules.store')}}" method="post">
  @csrf
    <label for="libeller">Nom</label><br>
    <input type="text" name="nom" id="input"  placeholder="inserer la filiere " class="form-control"/><br><br>
    @error('Nom')
    <span style="color: red;">{{'*'.$message}}</span><br><br>
    @enderror
   
    <br>
    <input type="submit" value="Create" class="btn btn-success"/>

        <a href="{{ url('/modules') }}" class="btn btn-success btn-sm" title="Add New filieres">
          <i class="fa fa-plus" aria-hidden="true"></i> Back
            </a>
    </form>
 
  </div>
</div>
@stop