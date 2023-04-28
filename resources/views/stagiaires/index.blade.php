
@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>les infos des stagiaires</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/stagiaires/create') }}" class="btn btn-success btn-sm" title="Add New stagiaires">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New stagiaires
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>idstagiaire</th>
                                    <th>idgroup</th>
                                    <th>nom group</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($stagiaires as $sta)
                                <td>{{$sta->idstagiaire}}</td>
                                <td>{{$sta->group->idgroup}}</td>
                                <td>{{$sta->group->nom}}</td>
                                <td>{{$sta->nom}}</td>
                                <td>{{$sta->prenom}}</td>
                               
                                <td>
                                           
                                <a href="{{Route('stagiaires.edit',$sta->idstagiaire)}}" ><button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                              
                                 <form method="POST" action="{{Route('stagiaires.destroy',$sta->idstagiaire)}}" accept-charset="UTF-8" style="display:inline">
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
