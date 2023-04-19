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
    {{-- <center> --}}
   <h3><a class="filieres_create" href="/filieres/create">Inserer une filiere</a></h3> 
    <table border="1"  id="table">
        <thead>
            <th>Libelle</th>
            <th>Informations</th>
            <th>Actions</th>
        </thead>
        <tbody>
           @foreach ($filieres as $filiere)
           <tr>
                <td>{{$filiere->libelle}}</td>
                <td>{{$filiere->infos}}</td>
                <td class="container-button"> 
                <form action="{{ route('filieres.destroy', $filiere->idfiliere) }}" method="POST">
                @csrf
                @method('DELETE') 
                <button type="submit" class="btn_d">Delete</button>&nbsp;&nbsp;
                </form> 
                <a href="/filieres/{{$filiere->idfiliere}}/edit"><button class="btn_u">Update</button></a>
            </td>
           </tr>
           @endforeach
        </tbody>
    </table>
</body>
{{-- </center> --}}
{{-- <style>
    table,tr{
        /* width: 100%; */
        border-collapse: collapse;
    }
    td{

    }
</style> --}}
</html>