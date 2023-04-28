
      
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header"> Ajouter un professeur</div>
  <div class="card-body">
  <form action="{{Route('profes.store')}}" method="post">
    @csrf
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required  class="form-control"/>
                    @error('nom')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" required class="form-control"/>
                    @error('prenom')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required class="form-control"/>
                </div>
                <div >
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="{{ old('password') }}" required class="form-control"/>
                    @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
    <br>
    <input type="submit" value="Create" class="btn btn-success"/>

        <a href="{{ url('/profes') }}" class="btn btn-success btn-sm" title="Add New filieres">
          <i class="fa fa-plus" aria-hidden="true"></i> Back
            </a>
    </form>
 
  </div>
</div>
@stop

