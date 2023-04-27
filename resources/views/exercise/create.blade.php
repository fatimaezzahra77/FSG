@extends('layouts.app')

@section('content')
    <h1>Ajouter un exercice</h1>

    <form action="{{ route('exercises.store') }}" method="POST">
        @csrf
        <div>
            <label for="titre">Titre :</label>
            <input type="text" name="titre" required>
        </div>
        <div>
            <label for="contenu">Contenu :</label>
            <textarea name="contenu" required></textarea>
        </div>
        <div>
            <label for="solution">Solution :</label>
            <textarea name="solution" required></textarea>
        </div>
        <div>
            <input type="checkbox" name="fait">
            <label for="fait">Fait</label>
        </div>
        <div>
            <label for="seance_id">Séance :</label>
            <select name="seance_id" required>
                @foreach ($seances as $seance)
                    <option value="{{ $seance->id }}">{{ $seance->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Enregistrer</button>
    </form>
@endsection
