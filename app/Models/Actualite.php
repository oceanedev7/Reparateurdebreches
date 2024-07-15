<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'contenu',
        'photo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}