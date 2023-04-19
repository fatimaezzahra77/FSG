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
    <form action="{{Route('stagiaires.store')}}" method="POST">
        @csrf 
        Nom du group:
        <select name="idgroup">
          @foreach($groupes as $group)
              <option value="{{$group->idgroup}}">{{$group->nom}}</option>
          @endforeach
      </select><br/>
        Nom: <input style="margin-left: 62px" type="text" name="nom" id="input" placeholder="inserer votre nom"><br/><br/>
        @error('nom')
        <span style="color: red;">{{'*'.$message}}</span><br><br>
        @enderror
        Prenom: <input style="margin-left: 46px" type="text" name="prenom" id="input" placeholder="inserer votre prenom"/><br/><br/>
        @error('prenom')
        <span style="color: red;">{{'*'.$message}}</span><br><br>
        @enderror
        <input type="submit" value="Ajouter" style="margin-left: 98px"><br/>
    </form>
</div>
<a href="{{ route('stagiaires.index') }}" class="btn">Back</a>

@if(session('message'))
  <span>{{session('message')}}</span>
@endif
</body>
</html>
