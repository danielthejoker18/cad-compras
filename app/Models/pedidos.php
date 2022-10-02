<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        "clientes_id",
        "data_pedido",
        "status"
    ];

    public function pedido()
    {
        return $this->belongsTo(clientes::class);
    }

    public function pedido_produto()
    {
        return $this->hasMany(pedido_produto::class);
    }
}
