<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exercise extends Model

{
    use HasFactory;
    protected $table = 'exercise';
    protected $primaryKey = 'idexercise';
    protected $fillable = ['titre', 'contenue','solution','fait'];

    function Seance(){
        return $this->belongsTo(Seance::class, 'idseance');
    }
    
}


