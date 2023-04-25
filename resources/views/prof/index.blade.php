@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Liste des professeurs</h3>
            <div class="card-tools">
                <a href="{{ route('prof.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Ajouter</a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prof as $prof)
                    <tr>
                        <td>{{ $prof->nom }}</td>
                        <td>{{ $prof->prenom }}</td>
                        <td>{{ $prof->email }}</td>
                        <td>
                            <a href="{{ route('prof.edit', $prof) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Modifier</a>
                            <form action="{{ route('prof.destroy', $prof) }}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce professeur ?')"><i class="fa fa-trash"></i> Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
