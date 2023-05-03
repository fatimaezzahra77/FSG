
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">modifier groupes</div>
  <div class="card-body">
      
      <form action="{{ Route('groupes.update' ,$groupes->idgroup) }}" method="post">
      @csrf
      @method('PUT')
      filiere:
        <select name="idfiliere"  class="form-select" aria-label="Default select example>
            @foreach ($filieres as $filiere)
                <option value="{{$filiere->idfiliere}}">{{$filiere->libelle}}</option>
            @endforeach
        </select><br><br>
  
        Module:
        <select name="idmodule"   class="form-select" aria-label="Default select example>
            @foreach ($Module as $module)
                <option value="{{$module->idmodule}}">{{$module->nom}}</option>
            @endforeach
        </select><br><br>
      
        Nom :<input style="margin-left: 41px" type="text" name="nom" id="input" value="{{$groupes->nom}}" class="form-control"/><br/><br/>
       
    
        <input type="submit" value="Update" class="btn btn-success"></br><br>
        <a href="{{ route('groupes.index') }}" class="btn">Back</a>
    </form>
 
  
  </div>
</div>
@stop