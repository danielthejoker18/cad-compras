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
        "quantidade"
    ];
}
