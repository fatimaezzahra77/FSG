
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header"> Ajouter un Examens</div>
  <div class="card-body">
  <form action="{{Route('examens.store')}}" method="post">
      @csrf
      groupe:
    <select name="idgroup"  class="form-select" aria-label="Default select example">
        @foreach($groupes as $groupe)
          <option value="{{$groupe->idgroup}}">{{$groupe->nom}}</option>
        @endforeach
</select><br/>
Module:
    <select name="idmodule"  class="form-select" aria-label="Default select example">
        @foreach($Module as $module)
          <option value="{{$module->idmodule}}">{{$module->nom}}</option>
        @endforeach
</select><br/>
        <label>Date:</label></br>
        <input type="date" name="date"  class="form-control"></br>
      

        <label>Type:</label></br>
        <input type="text" name="type" class="form-control"></br>
      

        <input type="submit" value="creat" class="btn btn-success">
        <a href="{{ url('/examens') }}" class="btn btn-success btn-sm" title="Add New Examens">
          <i class="fa fa-plus" aria-hidden="true"></i> views
            </a>
    </form>
 
  </div>
</div>
@stop
      
     