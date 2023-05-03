@extends('layouts.app')

@section('content')
    <h1>Modifier un exercice</h1>

    <form action="{{ route('exercises.update', $exercises->idexercice)}}" method="POST">
        @csrf
        @method('PUT')
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
            <input type="text" name="titre" value="{{$exercises->titre}}" required/>
        </div>
         <div>
            <label for="contenu">Contenu :</label>
            <textarea name="contenu" required value="{{$exercises->contenu}}"></textarea>
        </div>
        <div>
            <label for="solution">Solution :</label>
            <textarea name="solution" required value="{{$exercises->contenu}}"></textarea>
        </div>
       <div>
    <label for="fait">Fait</label>
    <input type="hidden" name="fait" value="0" value="{{$exercises->fait}}" >
    <input type="checkbox" name="fait" value="1" value="{{$exercises->fait}}" >
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
