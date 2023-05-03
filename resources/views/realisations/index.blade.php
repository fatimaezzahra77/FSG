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
   <h3><a class="realisation" href="/realisations/create">Inserer une realisation</a></h3> 
<table border="1" id="table">
    <thead>
        <th>Id de Realisation</th>
        <th>Titre d'exercice</th>
        <th>Nom de stagiaire</th>
        <th>Note</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($realisations as $realisation)
        <tr>
            <td>{{$realisation->idrealisation}}</td>
            <td>{{$realisation->exercices->titre}}</td>
            <td>{{$realisation->stagiairee->nom}}</td>
            <td>{{$realisation->note}}</td>
            <td class="container-button">  
                <form action="{{ route('realisations.destroy', $realisation->idrealisation) }}" method="POST">
                @csrf
                @method('DELETE') 
                <button type="submit" class="btn_d">Delete</button>&nbsp;&nbsp;
                </form> 
                <a href="/realisations/{{$realisation->idrealisation}}/edit"><button class="btn_u" >Update</button></a></td></td>
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