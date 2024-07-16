<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moyendepaiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    public function dons()
    {
        return $this->hasMany(Don::class);
    }
}
