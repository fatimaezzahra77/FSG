
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Modifier a professeur</div>
  <div class="card-body">
      
      <form action="{{ Route('profes.update' ,$prof->idprof) }}" method="post">
      @csrf
      @method('PUT')
      <label for="nom">Nom</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{$prof->nom}}" required class="form-control">
                    @error('nom')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" name="prenom" value="{{  $prof->prenom}}" required class="form-control">
                    @error('prenom')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$prof->email}}" required class="form-control">
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="{{$prof->email}}" required class="form-control">
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
    <br>
    <input type="submit" value="Update" class="btn btn-success"/>
    <a href="{{ route('profes.index') }}" class="btn">Back</a>

    </form>
 
  
  </div>
</div>
@stop

