<?php

namespace App\Models;
use App\Models\groupes;
use App\Models\Module;
use App\Models\Note;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    protected $primaryKey = 'idExamen';
    protected $fillable = ['date', 'type','idmodule','idgroup'];
    function group(){
        return $this->belongsTo(groupes::class, 'idgroup');
    }
    function Module(){
        return $this->belongsTo(Module::class, 'idmodule');
    }
    function Note(){
        return $this->hasMany(Note::class);
    }
 
    
}
