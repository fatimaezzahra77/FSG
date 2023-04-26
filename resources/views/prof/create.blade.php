{{-- @extends('layouts.app')

@section('content') --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ajouter un professeur</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('profes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}" required>
                    @error('nom')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" name="prenom" value="{{ old('prenom') }}" required>
                    @error('prenom')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                </div>
        <input type="submit" value="Create">
        <a href="{{ route('profes.index') }}" class="btn">Back</a>

