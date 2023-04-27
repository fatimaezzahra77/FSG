
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modifier un professeur</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('seances.update', $seances->idseance) }}" method="POST">
                @csrf
                @method('PUT')
                groupes
                <select  name="idgroup" class="from-select"  aria-label="Default select example">
                    @foreach($groupes as $groupe)
                    <option value="{{$groupe->idgroup}}">{{$groupe->nom}}</option>
                    @endforeach
                    </select><br/>
            
                module:
            
                <select  name="idmodule" class="from-select"  aria-label="Default select example">
                    @foreach($modules as $Module)
                    <option value="{{$Module->idmodule}}">{{$Module->nom}}</option>
                    @endforeach
                </select><br/>    
                prof:
            
                <select  name="idprof" class="from-select"  aria-label="Default select example">
                    @foreach($profes as $Prof)
                    <option value="{{$Prof->idprof}}">{{$Prof->nom}}</option>
                    @endforeach
                </select><br/>
                <label>nom</label><br>
                <input type="text" name="nom" id="input" class="from-control" value="{{$seances->nom}}" /><br>
                @error('nom')
                   <span style="color:red;">{{$message}}
                   @enderror
                   <input type="radio" name="type" id="presentiel" value="presentiel" />
                   <label for="presentiel">Présentiel</label>
                   
                   <input type="radio" name="type" id="distanceil" value="distanceil" />
                   <label for="distanceil">Distanceil</label>
            <br>       
                <label>description</label><br>
                <textarea name="description" id="" cols="10" rows="2">value="{{$seances->description}}"</textarea>
                @error('description')
                   <span style="color:red;">{{$message}}
                   @enderror
                
                
                <label>date</label><br>
                <input type="Date" name="date" id="input" class="from-control"/><br>
                <input type="submit" value="ajouter"  class="btn btn-success btn-sm" /><br>
            </from>

