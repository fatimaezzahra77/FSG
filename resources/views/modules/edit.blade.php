<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('modules.update', $modules->idmodule)}}" method="POST">
        @csrf
        @method('PUT')
         Nom du module:<input type="text" name="nom" value="{{$modules->nom}}" id="input"><br><br>
        <input type="submit" value="Update">
    </form><br>
<a href="{{ route('modules.index') }}" class="btn">Back</a>
</body>
</html>