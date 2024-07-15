<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'prenom',
        'nom',
        'genre',
        'date_naissance',
        'email',
        'numero_telephone',
        'adresse_postale',
        'ville',
        'code_postal',
        'pays',
        'role',
        'password',
    ];

    public function actualites()
    {
        return $this->hasMany(Actualite::class);
    }

    public function demandedecontacts()
    {
        return $this->hasMany(Demandedecontact::class);
    }

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
    
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function statistques()
    {
        return $this->hasMany(Statistique::class);
    }

    public function dons()
    {
        return $this->hasMany(Don::class);
    }

    public function newsletters()
    {
        return $this->belongsToMany(Newsletter::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
