
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Add a modules</div>
  <div class="card-body">
      
      <form action="{{ Route('modules.update' ,$modules->idmodule) }}" method="post">
      @csrf
      @method('PUT')
      <label for="libelle">Nom</label><br>
    <input type="text" name="nom" id="input"value="{{$modules->nom}}"  class="form-control"/><br><br>
    @error('nom')
    <span style="color: red;">{{'*'.$message}}</span><br><br>
    @enderror
  
    <br>
    <input type="submit" value="Update" class="btn btn-success"/>
    <a href="{{ route('modules.index') }}" class="btn">Back</a>

    </form>
 
  
  </div>
</div>
@stop