
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header"> Ajouter un Absence</div>
  <div class="card-body">
  <form action="{{Route('absences.store')}}" method="post">
      @csrf
      Seance:
    <select name="idseance"  class="form-select" aria-label="Default select example">
        @foreach($Seance as $Seance)
          <option value="{{$Seance->idseance}}">{{$Seance->nom}}</option>
        @endforeach
</select><br/>

        <label>nbrHeur:</label></br>
        <input type="number" name="nbrHeur"  class="form-control"></br>
      

        <input type="submit" value="creat" class="btn btn-success">
        <a href="{{ url('/absences') }}" class="btn btn-success btn-sm" title="Add New absences">
          <i class="fa fa-plus" aria-hidden="true"></i> views
            </a>
    </form>
 
  </div>
</div>
@stop