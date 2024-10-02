<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalite extends Model
{
    use HasFactory;

    protected $fillable = ['formation_id', 'modalite', 'duree_heures', 'duree_jours', 'details'];

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
