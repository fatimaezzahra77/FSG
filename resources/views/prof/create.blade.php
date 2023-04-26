{{-- @extends('layouts.app')

@section('content') --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ajouter un professeur</h3>
        </div>
        <div class="card-body">
            <form action="{{ Route('profes.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
                    @error('nom')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" required>
                    @error('prenom')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                <div >
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="{{ old('password') }}" required>
                    @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
        <input type="submit" value="Create">
        <a href="{{ route('profes.index') }}" class="btn">Back</a>

