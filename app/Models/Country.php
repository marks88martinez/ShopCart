<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries'; // Nombre de la tabla de países

    protected $fillable = [
        'name',
        'iso',
        // Agrega más campos según sea necesario
    ];
}
