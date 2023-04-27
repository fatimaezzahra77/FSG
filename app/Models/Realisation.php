<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    protected $table="stagiaires";
    protected $primaryKey = 'idstagiaire';
    protected $fillable = ['idgroup', 'nom', 'prenom'];
    use HasFactory;
    function module(){
        return $this->belongsTo(Module::class,'idmodule');
    }
}

