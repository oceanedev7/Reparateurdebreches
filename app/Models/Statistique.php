<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistique extends Model
{
    use HasFactory;

    protected $fillable = [
       'total_don',
        'nombre_de_vue',
        'nombre_de_membre',
        'nombre_inscrit_newsletter',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
