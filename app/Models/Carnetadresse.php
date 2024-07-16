<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carnetadresse extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        
    ];

    public function newsletters()
    {
        return $this->belongsToMany(Newsletter::class);
    }
}
