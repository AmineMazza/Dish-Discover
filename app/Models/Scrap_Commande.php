<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scrap_Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'nombre',
        'prix',
        'address',
        'ville',
    ];

    public function Offre()
    {
        return $this->hasMany(Offre::class);
    }
}
