<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

        protected $fillable = [
            'Name_Resto',
            'Address_Resto', // Correction du nom de la colonne
            'user_id',
            'updated_at',
            'created_at',
        ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }


    
}
