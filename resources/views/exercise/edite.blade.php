@extends('layouts.app')

@section('content')
    <h1>Modifier l'exercice "{{ $exercise->titre }}"</h1>

    <form action="{{ route('exercises.update', $exercise) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="titre">Titre :</label>
            <input type="text" name="titre" value="{{ $exercise->titre }}" required>
        </div>
        <div>
            <label for="contenu">Contenu :</label>
            <textarea name="contenu" required>{{ $exercise->contenu }}</textarea>
        </div>
        <div>
            <label for="solution">Solution :</label>
            <textarea name="solution" required>{{ $exercise->solution }}</textarea>
        </div>
        <div>
            <input type="checkbox" name="fait" {{ $exercise->fait ? 'checked' : '' }}>
            <label for="fait">Fait</label>
        </div>
        <div>
            <label for="seance_id">Séance :</label>
            <select name="seance_id" required>
                @foreach ($seances as $seance)
                    <option value="{{ $seance->id }}" {{ $exercise->seance_id == $seance->id ? 'selected' : '' }}>{{ $seance->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Enregistrer</button>
    </form>
@endsection
