<?php

namespace App\Models;

use App\Models\Sexe;
use App\Models\Objet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Visiteur extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function sexe()
    {
    	return $this->belongsTo(Sexe::class);
    }

    public function objet()
    {
        return $this->belongsTo(Objet::class);
    }
    
    public function agence()
    {
        return $this->hasMany(Agence::class);
    }
    
}
