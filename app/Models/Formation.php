<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_src',
        'image_alt',
        'title',
        'description',
        'duration',
        'price',
    ];
}
