<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;
    protected $table = 'absences';
    protected $primaryKey = 'idAbsence';
    protected $fillable = ['nbrHeur', 'idseance'];
    function Seance(){
        return $this->belongsTo(Seance::class, 'idseance');
    }
}
