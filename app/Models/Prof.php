<?php

namespace App\Models;

use App\Models\Seance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    use HasFactory;
    protected $primaryKey = 'idprof';
    protected $fillable = ['nom', 'prenom','email','password'];

    function seance(){
        return $this->hasMany(Seance::class);
    } 

}


