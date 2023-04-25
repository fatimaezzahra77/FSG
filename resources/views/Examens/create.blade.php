
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header"> Ajouter un Examens</div>
  <div class="card-body">
  <form action="{{Route('matchs.store')}}" method="post">
      @csrf
      group:
    <select name="idgroup"  class="form-select" aria-label="Default select example">
        @foreach($equipes as $equipe)
          <option value="{{$equipe->idEquipe}}">{{$equipe->nom}}</option>
        @endforeach
</select><br/>
Equipes2:
    <select name="idequipe2"  class="form-select" aria-label="Default select example">
        @foreach($equipes as $equipe)
          <option value="{{$equipe->idEquipe}}">{{$equipe->nom}}</option>
        @endforeach
</select><br/>
        <label>But 1:</label></br>
        <input type="text" name="but1"  class="form-control"></br>
      

        <label>But 2:</label></br>
        <input type="text" name="but2" class="form-control"></br>
      

        <input type="submit" value="creat" class="btn btn-success">
        <a href="{{ url('/matchs') }}" class="btn btn-success btn-sm" title="Add New matchs">
          <i class="fa fa-plus" aria-hidden="true"></i> views
            </a>
    </form>
 
  </div>
</div>
@stop
      
     