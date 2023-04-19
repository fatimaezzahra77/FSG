
<table border="1px" style="border-collapse: collapse; width:50%">
    <thead>
        <th>Nom</th>
        <th>Prenom</th>
    </thead>
    <tbody>
            @foreach ($stagiaires as $stagiaire)
            <tr>
            <td>{{$stagiaire->nom}}</td>
            <td>{{$stagiaire->prenom}}</td>
            </tr>
            @endforeach
</tbody>
</table>

