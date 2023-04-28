
@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>les infos des professeurs</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/profes/create') }}" class="btn btn-success btn-sm" title="Add New profes">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Nom</th>
                                   <th>Prénom</th>
                                   <th>Email</th>
                                   <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($prof as $prof)
                                <td>{{ $prof->nom }}</td>
                                <td>{{ $prof->prenom }}</td>
                                <td>{{ $prof->email }}</td>
                                <td>
                                           
                                <a href="{{Route('profes.edit',$prof->idprof)}}" ><button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                              
                                 <form method="POST" action="{{Route('profes.destroy',$prof->idprof)}}" accept-charset="UTF-8" style="display:inline">
                                 @method('delete')
                                 @csrf
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete " onclick="return confirm(&quot;Confirm delete?&quot;)">
                                 <i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                         </form>
                                </td>

                                </tr>
                                
                       @endforeach
                                
          </tbody>
    @if(session('message'))
     <span>{{session('message')}}</span>
     @endif<br>
                              
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
