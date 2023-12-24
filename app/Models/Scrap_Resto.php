<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scrap_Resto extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Name',
        'address',
        'category',
        'googleUrl',
        'ratingText',
        'stars',
        'numberOfReviews',
        'latitude',
        'longitude'
    ];

    public function Offre()
    {
        return $this->hasMany(Offre::class);
    }
}
