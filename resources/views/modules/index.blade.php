<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4><a id="link" href="{{Route('modules.create')}}">Create Match</a></h4>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id module</th>
            <th scope="col">Nom</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($modules as $module)
                <td>{{$module->idmodule}}</td>
                <td>{{$module->nom}}</td>
                <td>
                    <form action="{{ route('modules.destroy', $module->idmodule) }}" method="POST">
                    @csrf
                    @method('DELETE') 
                    <button type="submit" class="btn_d">Delete</button>&nbsp;&nbsp;
                    </form> 
                    <a href="/modules/{{$module->idmodule}}/edit"><button class="btn_u">Update</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>
