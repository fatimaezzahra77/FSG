<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('stagiaires.filterStagiaires')}}" method="GET">
       <h3> select un group:</h3>Nom group: &nbsp;<select name="idgroup">
            @foreach($groupes as $group)
                <option value="{{$group->idgroup}}">{{$group->nom}}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>

    