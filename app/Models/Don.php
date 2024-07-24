<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Don extends Model
{
    use HasFactory;

    protected $fillable = [
       'montant',
       'nom',
       'prenom',
       'adresse',
       'email',
       'code_postal',
       'ville',
       'pays',
       'telephone',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function moyendepaiement()
    {
        return $this->belongsTo(Moyendepaiement::class);
    }
}
