<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'titre',
        'description',
        'date',
        'lieu',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
