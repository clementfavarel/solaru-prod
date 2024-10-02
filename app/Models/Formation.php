<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 'description', 'objectifs', 'contenu', 'prerequis', 'niveau',
        'profils_stagiaires', 'suivi_exploitation', 'acces_handicap'
    ];

    public function modalites()
    {
        return $this->hasMany(Modalite::class);
    }
}
