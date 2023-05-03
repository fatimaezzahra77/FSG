
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header"> Add un notes</div>
  <div class="card-body">
  <form action="{{Route('notes.store')}}" method="post">
      @csrf
      nom du stagiaire:
    <select name="idstagiaire"  class="form-select" aria-label="Default select example">
        @foreach($stagiaires as $stagiaire)
          <option value="{{$stagiaire->idstagiaire}}">{{$stagiaire->nom}}</option>
        @endforeach
</select><br/>
  Date d'examen::
    <select name="idExamen"  class="form-select" aria-label="Default select example">
        @foreach($examens as $examen)
          <option value="{{$examen->idExamen}}">{{$examen->date}}</option>
        @endforeach
</select><br/>
    Valeur: <input style="margin-left: 62px" type="text" name="valeur" id="input" placeholder="inserer votre nom" class="form-control"><br/><br/>
        @error('nom')
        <span style="color: red;">{{'*'.$message}}</span><br><br>
        @enderror
   

        <input type="submit" value="creat" class="btn btn-success">
        <a href="{{ url('/notes') }}" class="btn btn-success btn-sm" title="Add New notes">
          <i class="fa fa-plus" aria-hidden="true"></i> views
            </a>
    </form>
 
  </div>
</div>
@stop
