
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">modifier stagiaires</div>
  <div class="card-body">
      
      <form action="{{ Route('stagiaires.update' ,$stagiaire->idstagiaire) }}" method="post">
      @csrf
      @method('PUT')
      Nom du groupe:
        <select name="idgroup"  class="form-select" aria-label="Default select example>
            @foreach ($groupes as $groupe)
                <option value="{{$groupe->idgroup}}">{{$groupe->nom}}</option>
            @endforeach
        </select><br>
        Nom: <input  type="text" name="nom" id="input" value="{{$stagiaire->nom}}"   class="form-control"/><br/><br/>
    Prenom:<input type="text" name="prenom" id="input" value="{{$stagiaire->prenom}}"  class="form-control"/><br/><br/>
  
        <input type="submit" value="Update" class="btn btn-success"></br><br>
        <a href="{{ route('stagiaires.index') }}" class="btn">Back</a>
    </form>
 
  
  </div>
</div>
@stop
