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

<form action="{{route('realisations.update', $realisation->idrealisation)}}" method="POST">
    @csrf 
    @method('PUT')
    <h3>Modifier la realisation:</h3>
    Choisissez l'exercice:<select style="margin-left: 15px" name="idexercice">
        @foreach($exercices as $exercice)
          <option value="{{$exercice->idexercice}}">{{$exercice->titre}}</option>
        @endforeach
    </select><br/><br/>
    Choisissez le stagiaire:<select style="margin-left: 15px" name="idstagiaire">
        @foreach($stagiaires as $stagiaire)
          <option value="{{$stagiaire->idstagiaire}}">{{$stagiaire->nom}}</option>
        @endforeach
    </select><br/><br/>
    La Note:<input style="margin-left: 41px" type="text" name="note" id="input" value="{{$realisation->note}}"/><br/><br/>
    <input type="submit" value="Modifier" style="margin-left: 130px"/><br/>
  <a style="margin-left: 6px"href="{{ route('realisations.index') }}" class="btn">Back</a>   
</form>
</body>
</html>