<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'prix'
    ];


    public function Demande()
    {
        return $this->hasMany(Demande::class);
    }

    public function Scrap_Resto()
    {
        return $this->belongsTo(Scrap_Resto::class);
    }

    public function Scrap_Commande()
    {
        return $this->belongsTo(Scrap_Commande::class);
    }
}
