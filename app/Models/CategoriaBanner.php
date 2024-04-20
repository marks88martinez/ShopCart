<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaBanner extends Model
{
    use HasFactory;

    protected $table = 'categoria_banners'; // Nombre de la tabla

    protected $fillable = [
        'name',
       
    ];
}
