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
<h2>Inserer un group :</h2><br>
<div id="div">
<form action="{{Route('realisations.store')}}" method="POST">
    @csrf 
    Exercises:
    <select name="idexercice" >
        @foreach($exercices as $exercice)
          <option style="height: 20px;" value="{{$exercice->idexercice}}">{{$exercice->titre}}</option>
        @endforeach
    </select><br/><br/>
    Stagiaire:
    <select name="idstagiaire" >
        @foreach($stagiaires as $stagiaire)
          <option style="height: 20px;" value="{{$stagiaire->idstagiaire}}">{{$stagiaire->nom}}</option>
        @endforeach
    </select><br/><br/>
    Note: <input type="text" name="note" id="input"  placeholder="inserer la note"/><br/><br/>
    @error('nom')
    <span style="color: red;">{{'*'.$message}}</span><br><br>
    @enderror
    <input type="submit" value="Submit"><br/>
</form>
</div>
<a href="{{ route('realisations.index') }}" class="btn">Back</a>

@if(session('message'))
  <span>{{session('message')}}</span>
@endif
</body>
</html>