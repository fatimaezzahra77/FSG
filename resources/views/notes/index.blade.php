
@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>les infos des notes</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/notes/create') }}" class="btn btn-success btn-sm" title="Add New notes">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Notes
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>idNote</th>
                                    <th>Nom stagiaire</th>
                                    <th>Date examen</th>
                                    <th>Valeur</th>
                                    <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($notes as $note)
                                <td>{{$note->idnote}}</td>
                                <td>{{$note->stagiaire->nom}}</td>
                                <td>{{$note->examen->date}}</td>
                                 <td>{{$note->valeur}}</td>
                               
                                <td>
                                           
                                <a href="{{Route('notes.edit',$note->idnote)}}" ><button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                              
                                 <form method="POST" action="{{Route('notes.destroy',$note->idnote)}}" accept-charset="UTF-8" style="display:inline">
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