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
  <form action="{{route('notes.update', $note->idnote)}}" method="POST">
    @csrf 
    @method('PUT')
    <h3>Modifier la note:</h3>
    Nom du stagiaire:
    <select name="idstagiaire">
      @foreach($stagiaires as $stagiaire)
          <option value="{{$stagiaire->idstagiaire}}">{{$stagiaire->nom}}</option>
      @endforeach
  </select><br/>
  Date d'examen:
  <select name="idExamen">
    @foreach($examens as $examen)
        <option value="{{$examen->idExamen}}">{{$examen->date}}</option>
    @endforeach
</select><br/>
    Valeur: <input style="margin-left: 56px" type="text" name="valeur" id="input" value="{{$note->valeur}}" /><br/><br/>
    <input type="submit" value="Modifier" style="margin-left: 94px"/><br/>
  <a href="{{ route('notes.index') }}" class="btn">Back</a>   
</form>
</body>
</html>
