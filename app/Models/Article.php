<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'photo',
        'titre',
        'description',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
