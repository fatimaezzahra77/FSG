<?php

namespace App\Models;

use App\Models\exercise;
use App\Models\stagiaires;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Realisation extends Model
{
    protected $table="realisations";
    protected $primaryKey = 'idrealisation';
    protected $fillable = ['idrealisation', 'idexercice', 'idstagiaire', 'note'];
    use HasFactory;

    function exercices(){
        return $this->belongsTo(exercise::class,'idexercice');
    }

    function stagiairee(){
        return $this->belongsTo(stagiaires::class, 'idstagiaire');
    }
    

}

