<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;
   protected $guarded = [];

   public function agence()
   {
   		return $this->hasMany(Agence::class);
   }
}
