@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Détails du professeur</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Nom :</th>
                        <td>{{ $prof->nom }}</td>
                    </tr>
                    <tr>
                        <th>Prénom :</th>
                        <td>{{ $prof->prenom }}</td>
                    </tr>
                    <tr>
                        <th>Email :</th>
                        <td>{{ $prof->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
