<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Document</title>
</head>
<body>
   <h3><a class="filieres_create" href="/stagiaires/create">Inserer un stagiaire</a></h3> 
    <table border="1" id="table">
        <thead>
            <th>idstagiaire</th>
            <th>idgroup</th>
            <th>nom group</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($stagiaires as $sta)
            <tr>
                <td>{{$sta->idstagiaire}}</td>
                <td>{{$sta->group->idgroup}}</td>
                <td>{{$sta->group->nom}}</td>
                <td>{{$sta->nom}}</td>
                <td>{{$sta->prenom}}</td>
                <td class="container-button">  
                    <form action="{{ route('stagiaires.destroy', $sta->idstagiaire) }}" method="POST">
                    @csrf
                    @method('DELETE') 
                    <button type="submit" class="btn_d">Delete</button>&nbsp;&nbsp;
                    </form> 
                    <a href="/stagiaires/{{$sta->idstagiaire}}/edit"><button class="btn_u" >Update</button></a></td></td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
