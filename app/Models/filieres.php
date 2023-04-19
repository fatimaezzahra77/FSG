<?php

namespace App\Models;

use App\Models\groupes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class filieres extends Model
{
    use HasFactory;
    protected $primaryKey = 'idfiliere';
    protected $fillable = ['libelle', 'infos'];

    function groupes(){
        return $this->hasMany(groupes::class);
    } 
    

}
