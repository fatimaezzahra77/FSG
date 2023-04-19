<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('groupes.filterStagiaires')}}">
        <h3> select un filiere:</h3>Nom Filiere: &nbsp; <select name="idfiliere">
            @foreach ($filiere as $filiere)
            <option value="{{$filiere->idfiliere}}">{{$filiere->libelle}}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>