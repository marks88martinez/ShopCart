<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['total_amount','user_id','status']; // Especifica los campos que se pueden asignar de forma masiva

    // Relación uno a muchos con la tabla de productos del pedido
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
