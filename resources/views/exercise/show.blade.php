
    <h1>{{ $exercise->titre }}</h1>

    <p>{{ $exercise->contenu }}</p>

    <h2>Solution</h2>
    <p>{{ $exercise->solution }}</p>

    <h2>Statut</h2>
    <p>{{ $exercise->fait ? 'Fait' : 'Non fait' }}</p>

    <h2>Séance</h2>
    <p>{{ $exercise->seance->nom }}</p>

    <a href="{{ route('exercises.edit', $exercise) }}">Modifier</
