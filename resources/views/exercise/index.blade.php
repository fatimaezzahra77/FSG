@extends('layouts.app')

@section('content')
    <h1>Liste des exercices</h1>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Solution</th>
                <th>Fait</th>
                <th>Séance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exercises as $exercise)
                <tr>
                    <td>{{ $exercise->titre }}</td>
                    <td>{{ $exercise->contenu }}</td>
                    <td>{{ $exercise->solution }}</td>
                    <td>{{ $exercise->fait ? 'Oui' : 'Non' }}</td>
                    <td>{{ $exercise->seance->nom }}</td>
                    <td>
                        <a href="{{ route('exercises.show', $exercise) }}">Voir</a>
                        <a href="{{ route('exercises.edit', $exercise) }}">Modifier</a>
                        <form action="{{ route('exercises.destroy', $exercise) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('exercises.create') }}">Ajouter un exercice</a>
@endsection
