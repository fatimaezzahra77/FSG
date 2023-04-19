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
<form action="{{Route('groupes.store')}}" method="POST">
    @csrf 
    filieres:
    <select name="idfiliere" >
        @foreach($filieres as $filiere)
          <option style="height: 20px;" value="{{$filiere->idfiliere}}">{{$filiere->libelle}}</option>
        @endforeach
    </select><br/><br/>
    Nom: <input type="text" name="nom" id="input"  placeholder="inserer votre nom"/><br/><br/>
    @error('nom')
    <span style="color: red;">{{'*'.$message}}</span><br><br>
    @enderror
    <input type="submit" value="Submit"><br/>
</form>
</div>
<a href="{{ route('groupes.index') }}" class="btn">Back</a>

@if(session('message'))
  <span>{{session('message')}}</span>
@endif
</body>
</html>