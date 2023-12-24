<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_demande',
        'statut_demande'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Offre()
    {
        return $this->belongsTo(Offre::class);
    }


}
