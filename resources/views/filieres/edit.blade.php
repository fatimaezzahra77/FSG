
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Add a filieres</div>
  <div class="card-body">
      
      <form action="{{ Route('filieres.update' ,$filiere->idfiliere) }}" method="post">
      @csrf
      @method('PUT')
      <label for="libelle">Libelle</label><br>
    <input type="text" name="libelle" id="input" value="{{$filiere->libelle}}"   class="form-control"/><br><br>
    @error('libelle')
    <span style="color: red;">{{'*'.$message}}</span><br><br>
    @enderror
    <label for="nom">Infos</label><br>
    <input type="text" name="infos" id="input"  value="{{$filiere->infos}}"  class="form-control"><br><br>
    @error('description')
    <span style="color: red;">{{'*'.$message}}</span>
    @enderror
    <br>
    <input type="submit" value="Update" class="btn btn-success"/>
    <a href="{{ route('filieres.index') }}" class="btn">Back</a>

    </form>
 
  
  </div>
</div>
@stop