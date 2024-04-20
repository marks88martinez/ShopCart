<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ProductoImagenes extends Model
{
    use HasFactory;
    protected $table = 'producto_imagenes';

    protected $fillable = [
        'path_image',
        'path_image_200x200',
        'path_image_1024x1024',
        'status',
    ];

    // public function productoImagenes(): BelongsToMany
    // {
    //     return $this->belongsToMany(ProductoImagenes::class, 'producto_imagen', 'id', 'producto_id');
    // }



}

