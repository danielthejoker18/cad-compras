<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido_produto extends Model
{
    use HasFactory;

    protected $fillable = [
        "produtos_id",
        "pedidos_id",
        "quantidade",
    ];

    public function partes_pedido()
    {
        return $this->belongsTo(pedidos::class);
    }
    public function partes_produtos()
    {
        return $this->hasMany(produtos::class, 'produtos_id', 'id');
    }
}
