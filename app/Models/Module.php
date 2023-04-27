<?php

namespace App\Models;

use App\Models\Seance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;
    protected $table = "module";
    protected $primaryKey ="idmodule";
    protected $fillable=['nom'];

    function seances(){
        return $this->belongsTo(Seance::class,'idseance');
    }
    
}
