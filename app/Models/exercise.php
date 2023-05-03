<?php

namespace App\Models;

use App\Models\Realisation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class exercise extends Model

{
    use HasFactory;
    protected $table = 'exercices';
    protected $primaryKey = 'idexercice';
    protected $fillable = ['idseance', 'titre', 'contenu','solution','fait'];

    function Seance(){
        return $this->belongsTo(Seance::class, 'idseance');
    }

    function realisation(){
        return $this->belongsTo(Realisation::class, 'idrealisation');
    }
}
