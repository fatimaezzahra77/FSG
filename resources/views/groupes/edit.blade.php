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

<form action="{{route('groupes.update', $groupes->idgroup)}}" method="POST">
    @csrf 
    @method('PUT')
    <h3>Modifier le groupe:</h3>
    Choisissez le filiere:<select style="margin-left: 15px" name="idfiliere">
        @foreach($filieres as $filiere)
          <option value="{{$filiere->idfiliere}}">{{$filiere->libelle}}</option>
        @endforeach
    </select><br/><br/>
    Nom du group:<input style="margin-left: 41px" type="text" name="nom" id="input" value="{{$groupes->nom}}"/><br/><br/>
    <input type="submit" value="Modifier" style="margin-left: 130px"/><br/>
  <a style="margin-left: 6px"href="{{ route('groupes.index') }}" class="btn">Back</a>   
</form>
</body>
</html>