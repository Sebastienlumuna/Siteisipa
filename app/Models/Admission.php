<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'postnom',
        'prenom',
        'sexe',
        'email',
        'phone',
        'address',
        'filiere',
        'niveau',
    ];
}