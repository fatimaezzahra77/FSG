<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            margin-left: 200px;
            margin-top: 50px
        }
    </style>
</head>
<body>
    <h2>Nombre de stagiaires par group :</h2>    
            @foreach ($groupenombrestag as $groupenombre)
                <h1>{{$groupenombre->nom}}</h1>
                <h1>{{$groupenombre->nombre}}</h1>
            @endforeach
{{-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! why the nombre appears when i dont use the @foreach method? --}}
</body>
</html>