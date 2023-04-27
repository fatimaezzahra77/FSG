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
    protected $table = "seances";
    protected $primaryKey ="idseance";
    protected $enums = ['type' => ['presentiel', 'distanceil']];
    protected $fillable=['idgroup','idmodule', 'idprof	', 'nom', 'description', 'type	', 'date'];
    
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
