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
    <div id="div">
    <form action="{{Route('notes.store')}}" method="POST">
        @csrf 
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
        Valeur: <input style="margin-left: 62px" type="text" name="valeur" id="input" placeholder="inserer votre nom"><br/><br/>
        @error('nom')
        <span style="color: red;">{{'*'.$message}}</span><br><br>
        @enderror
        <input type="submit" value="Ajouter" style="margin-left: 98px"><br/>
    </form>
</div>
<a href="{{ route('notes.index') }}" class="btn">Back</a>

@if(session('message'))
  <span>{{session('message')}}</span>
@endif
</body>
</html>
