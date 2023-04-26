<?php

namespace App\Models;

use App\Models\Prof;
use App\Models\Module;
use App\Models\groupes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seance extends Model
{
    use HasFactory;
    protected $table = "seance";
    protected $primaryKey ="idseance";
    protected $fillable=['nom','description','date','type','idgroup','idprof','idmodule'];
    
    function module(){
        return $this->belongsTo(Module::class,'idmodule');
    }
    function groupes(){
        return $this->belongsTo(groupes::class, 'idgroup');
    }
    function prof(){
        return $this->belongsTo(Prof::class, 'idprof');
    }
    
}
