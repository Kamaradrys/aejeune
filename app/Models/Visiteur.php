<?php

namespace App\Models;

use App\Models\Sexe;
use App\Models\Objet;
use App\Models\User;
use App\Models\Agence;
/*use App\Models\User;*/
/*use App\Models\Visiteur;*/

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
        return $this->belongsTo(Agence::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
