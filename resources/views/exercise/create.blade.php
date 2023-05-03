@extends('layouts.app')

@section('content')
    <h1>Ajouter un exercice</h1>

    <form action="{{ route('exercises.store') }}" method="POST">
        @csrf
        <div>
            <label for="idseance">Seance :</label>
            <select name="idseance" required>
                @foreach ($seances as $seance)
                    <option value="{{ $seance->idseance }}">{{ $seance->nom }}</option>
                @endforeach
            </select>
        </div>
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
    <label for="fait">Fait</label>
    <input type="hidden" name="fait" value="0">
    <input type="checkbox" name="fait" value="1">
</div>

        <button type="submit">Enregistrer</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection


