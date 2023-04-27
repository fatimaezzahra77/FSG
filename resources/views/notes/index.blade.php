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
   <h3><a href="/notes/create">Inserer une Note</a></h3> 
<table border="1" id="table">
    <thead>
        <th>idNote</th>
        <th>Nom stagiaire</th>
        <th>Date examen</th>
        <th>Valeur</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($notes as $note)
        <tr>
            <td>{{$note->idnote}}</td>
            <td>{{$note->stagiaire->nom}}</td>
            <td>{{$note->examen->date}}</td>
            <td>{{$note->valeur}}</td>
            {{-- <td class="container-button">  
                <form action="{{ route('groupes.destroy', $group->idgroup) }}" method="POST">
                @csrf
                @method('DELETE') 
                <button type="submit" class="btn_d">Delete</button>&nbsp;&nbsp;
                </form> 
                <a href="/groupes/{{$group->idgroup}}/edit"><button class="btn_u" >Update</button></a></td></td>
            </td> --}}
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