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
  <form action="{{route('stagiaires.update', $stagiaire->idstagiaire)}}" method="POST">
    @csrf 
    @method('PUT')
    <h3>Modifier le stagiaire:</h3>
    Nom du group: <select name="idgroup">
        @foreach($groupes as $group)
          <option value="{{$group->idgroup}}">{{$group->nom}}</option>
        @endforeach
    </select><br/><br/>
    Nom: <input style="margin-left: 56px" type="text" name="nom" id="input" value="{{$stagiaire->nom}}" /><br/><br/>
    Prenom: <input style="margin-left: 39px"type="text" name="prenom" id="input" value="{{$stagiaire->prenom}}"/><br/><br/>
    <input type="submit" value="Modifier" style="margin-left: 94px"/><br/>
  <a href="{{ route('stagiaires.index') }}" class="btn">Back</a>   
</form>
</body>
</html>
