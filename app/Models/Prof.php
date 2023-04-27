<?php

namespace App\Models;

// use App\Models\Seance;
use App\Models\Seance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prof extends Model
{
    use HasFactory;
    protected $table = "prof"; 
    protected $primaryKey = 'idprof';
    protected $fillable = ['nom', 'prenom','email','password'];

    function seancee(){
        return $this->hasMany(Seance::class);
    } 

}


