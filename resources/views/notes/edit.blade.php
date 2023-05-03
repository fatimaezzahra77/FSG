

@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">modifier notes</div>
  <div class="card-body">
      
      <form action="{{ Route('notes.update' ,$note->idnote) }}" method="post">
      @csrf
      @method('PUT')
        Nom du stagiaire:
        <select name="idstagiaire"  class="form-select" aria-label="Default select example>
           @foreach($stagiaires as $stagiaire)
                <option value="{{$stagiaire->idstagiaire}}">{{$stagiaire->nom}}</option>
            @endforeach
        </select><br><br>
  
        Date d'examen:
        <select name="idExamen"   class="form-select" aria-label="Default select example>
          @foreach($examens as $examen)
                <option value="{{$examen->idExamen}}">{{$examen->date}}</option>
            @endforeach
        </select><br><br>
      
        Valeur: <input  class="form-control" type="text" name="valeur" id="input" value="{{$note->valeur}}" /><br/><br/>
   
         
        <input type="submit" value="Update" class="btn btn-success"></br><br>
        <a href="{{ route('notes.index') }}" class="btn">Back</a>
    </form>
 
  
  </div>
</div>
@stop
