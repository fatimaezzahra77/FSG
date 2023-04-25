<?php

namespace App\Models;

use App\Models\Examen;
use App\Models\stagiaires;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;
    protected $table = "note";
    protected $primaryKey ="idnote";
    protected $fillable=['idExamen', 'idstagiaire', 'valeur'];

    function stagiaire(){
        return $this->belongsTo(stagiaires::class);
    }
    function examen(){
        return $this->belongsTo(Examen::class, 'idExamen');
    }
}
