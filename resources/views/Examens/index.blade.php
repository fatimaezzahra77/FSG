
@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>les infos des Examens</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/Examens/create') }}" class="btn btn-success btn-sm" title="Add New Examens">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                    <th>groupe</th>
                                    <th>Module</th>
                                    <th>Date</th>
                                    <th>type</th>
                                    <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($Examen as $Examen)
                                <td>{{$Examen->nom}}</td>
                                <td>{{$Examen->nom}}</td>
                                <td>{{$Examen->date}}</td>
                                <td>{{$Examen->type}}</td>
                               
                                <td>
                                           
                                <a href="{{Route('Examens.edit',$Examen->idExamen)}}" ><button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                              
                                 <form method="POST" action="{{Route('Examens.destroy',$Examen->idExamen)}}" accept-charset="UTF-8" style="display:inline">
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