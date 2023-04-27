
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">modifier Absence</div>
  <div class="card-body">
      
      <form action="{{ Route('absences.update' ,$Absence->idAbsence) }}" method="post">
      @csrf
      @method('PUT')
      Seance:
        <select name="idseance"  class="form-select" aria-label="Default select example>
            @foreach ($Seance as $Seance)
                <option value="{{$Seance->idseance}}">{{$Seance->nom}}</option>
            @endforeach
        </select><br><br>
  
     
      
        nbrHeur:<input type="number" name="nbrHeur" value="{{$Absence->nbrHeur}}"  class="form-control"><br><br>
        
    
        <input type="submit" value="Update" class="btn btn-success"></br><br>
        <a href="{{ route('absences.index') }}" class="btn">Back</a>
    </form>
 
  
  </div>
</div>
@stop