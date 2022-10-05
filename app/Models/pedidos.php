<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class pedidos extends Model
{
    use HasFactory;
    use Sortable;
    protected $fillable = [
        "clientes_id",
        "data_pedido",
        "status"
    ];

    public $sortable = ['clientes_id', 'data_pedido', 'status'];

    public function pedido()
    {
        return $this->belongsTo(clientes::class, 'clientes_id', 'clientes_id');
    }

    public function pedido_produto()
    {
        return $this->hasMany(pedido_produto::class, 'produtos_id', 'id');
    }
}
