
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header"> Ajouter un groupe</div>
  <div class="card-body">
  <form action="{{Route('groupes.store')}}" method="post">
      @csrf
      groupe:
    <select name="idfiliere"  class="form-select" aria-label="Default select example">
        @foreach($filieres as $filiere)
          <option value="{{$filiere->idfiliere}}">{{$filiere->libelle}}</option>
        @endforeach
</select><br/>

   Nom: <input type="text" name="nom" id="input"  placeholder="inserer votre nom"  class="form-control"/><br/><br/>
    @error('nom')
    <span style="color: red;">{{'*'.$message}}</span><br><br>
    @enderror

        <input type="submit" value="creat" class="btn btn-success">
        <a href="{{ url('/groupes') }}" class="btn btn-success btn-sm" title="Add New groupes">
          <i class="fa fa-plus" aria-hidden="true"></i> Back
            </a>
    </form>
    @if(session('message'))
  <span>{{session('message')}}</span>
@endif
 
  </div>
</div>
@stop