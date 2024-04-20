<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $fillable = ['sku','order_id','product_id','codigo', 'product_name', 'price', 'quantity']; // Especifica los campos que se pueden asignar de forma masiva

    // Relación inversa con la tabla de pedidos
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
