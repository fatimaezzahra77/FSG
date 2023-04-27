<?php

namespace App\Models;

use App\Models\Examen;
use App\Models\Seance;
use App\Models\filieres;
use App\Models\stagiaires;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class groupes extends Model
{
    use HasFactory;
    protected $table="groupes";
    protected $primaryKey = 'idgroup' ;
    protected $fillable = ['idfiliere', 'nom'];

    function stagiaires(){
        return $this->hasMany(stagiaires::class);
    }
    function filieres(){
        return $this->belongsTo(filieres::class, 'idfiliere');
    }
    function seance(){
        return $this->hasMany(Seance::class);
    }

    function examens(){
        return $this->hasMany(Examen::class, 'idExamen');
    }
}
