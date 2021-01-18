<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commune;

class Agence extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function commune()
    {
    		return $this->belongsTo(Commune::class);
    }

    public function visiteurs()
   {
        return $this->hasMany(Agence::class);
   }
}
