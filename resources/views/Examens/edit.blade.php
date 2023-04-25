
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">modifier Examens</div>
  <div class="card-body">
      
      <form action="{{ Route('Examens.update' ,$Examen->idExamen) }}" method="post">
      @csrf
      @method('PUT')
        groupe:
        <select name="idgroup"  class="form-select" aria-label="Default select example>
            @foreach ($groupes as $groupe)
                <option value="{{$groupe->idgroup}}">{{$groupe->nom}}</option>
            @endforeach
        </select><br><br>
  
        Module:
        <select name="idmodule"   class="form-select" aria-label="Default select example>
            @foreach ($Module as $module)
                <option value="{{$module->idmodule}}">{{$module->nom}}</option>
            @endforeach
        </select><br><br>
      
          Date:<input type="date" name="date" value="{{$Examen->date}}"  class="form-control"><br><br>
          Type:<input type="text" name="type" value="{{$Examen->type}}"  class="form-control"><br><br>
    
        <input type="submit" value="Update" class="btn btn-success"></br><br>
        <a href="{{ route('Examens.index') }}" class="btn">Back</a>
    </form>
 
  
  </div>
</div>
@stop