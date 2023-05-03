

@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>les infos des filieres</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/filieres/create') }}" class="btn btn-success btn-sm" title="Add New filieres">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Libelle</th>
                                    <th>Informations</th>
                                    <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($filieres as $filiere)
                                <td>{{$filiere->libelle}}</td>
                                <td>{{$filiere->infos}}</td>
                                <td>
                                           
                                <a href="{{Route('filieres.edit',$filiere->idfiliere)}}" ><button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                              
                                 <form method="POST" action="{{Route('examens.destroy',$filiere->idfiliere)}}" accept-charset="UTF-8" style="display:inline">
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
