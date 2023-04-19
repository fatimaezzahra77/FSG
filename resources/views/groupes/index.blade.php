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
   <h3><a class="filieres_create" href="/groupes/create">Inserer un group</a></h3> 
<table border="1" id="table">
    <thead>
        <th>idgroup</th>
        <th>libelle</th>
        <th>infos</th>
        <th>Nom</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($groupes as $group)
        <tr>
            <td>{{$group->idgroup}}</td>
            <td>{{$group->filieres->libelle}}</td>
            <td>{{$group->filieres->infos}}</td>
            <td>{{$group->nom}}</td>
            <td class="container-button">  
                <form action="{{ route('groupes.destroy', $group->idgroup) }}" method="POST">
                @csrf
                @method('DELETE') 
                <button type="submit" class="btn_d">Delete</button>&nbsp;&nbsp;
                </form> 
                <a href="/groupes/{{$group->idgroup}}/edit"><button class="btn_u" >Update</button></a></td></td>
            </td>
        </tr>
        @endforeach
    </tbody>
    <style>
        table,tr{
            width: 100%;
            border-collapse: collapse;
        }
        td{
    
        }
    </style>
</table>
</body>
<html/>