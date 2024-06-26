<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'productos';

    protected $fillable = [
        'name',
        'description',
        'slug',
        'precio',
        'marca_id',
        'precio_oferta',
        'sku',
        'destacado',
        'status',
    ];

    // public function categorias(){
    //     return $this->belongsToMany(Categoria::class);
    // }


    public function categorias()
    {
        return $this->belongsToMany('App\Models\Categoria', 'producto_categoria', 'producto_id', 'categoria_id');
    }
  
    public function productoImagenes()
    {
        return $this->belongsToMany('App\Models\ProductoImagenes', 'producto_imagen', 'producto_id', 'imagen_id');
    }
    public function productoImagen()
    {
        return $this->productoImagenes()->take(1);

    }



    public function getRouteKeyName()
    {
        return 'slug';
    }







    // public function productoImagen(): BelongsToMany
    // {
    //     return $this->belongsToMany(ProductoImagen::class, 'producto_imagenes', 'id', 'imagen_id');
    // }
    // public function ProductoCategorias(): BelongsToMany
    // {
    //     return $this->belongsToMany(ProductoCategoria::class, 'producto_categoria', 'id', 'categoria_id');
    // }


}
