
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header"> Ajouter un stagiaires</div>
  <div class="card-body">
  <form action="{{Route('stagiaires.store')}}" method="post">
      @csrf
      Nom du group:
    <select name="idgroup"  class="form-select" aria-label="Default select example">
        @foreach($groupes as $groupe)
          <option value="{{$groupe->idgroup}}">{{$groupe->nom}}</option>
        @endforeach
</select><br/>
      Nom: <input  type="text" name="nom" id="input" placeholder="inserer votre nom" class="form-control"/><br/><br/>
        @error('nom')
        <span style="color: red;">{{'*'.$message}}</span><br><br>
        @enderror
        Prenom: <input type="text" name="prenom" id="input" placeholder="inserer votre prenom" class="form-control"/><br/><br/>
        @error('prenom')
        <span style="color: red;">{{'*'.$message}}</span><br><br>
        @enderror
        <input type="submit" value="creat" class="btn btn-success">
        <a href="{{ url('/stagiaires') }}" class="btn btn-success btn-sm" title="Add New stagiaires">
          <i class="fa fa-plus" aria-hidden="true"></i> views
            </a>
    </form>
 
  </div>
</div>
@stop
      
