<?php

namespace App\Models;

use App\Models\Visiteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Objet extends Model
{
    use HasFactory;

   protected $guarded = [];

    public function visiteurs()
	   {
	   	 return $this->hasMany(Visiteur::class);
	   }
     
}
