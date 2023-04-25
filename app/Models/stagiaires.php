<?php

namespace App\Models;

use App\Models\Note;
use App\Models\groupes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class stagiaires extends Model
{
    use HasFactory;
    protected $table="stagiaires";
    protected $primaryKey = 'idstagiaire';
    protected $fillable = ['idgroup', 'nom', 'prenom'];

    function group(){
        return $this->belongsTo(groupes::class, 'idgroup');
    }
    function note(){
        return $this->belongsTo(Note::class, 'idnote');
    }
}

