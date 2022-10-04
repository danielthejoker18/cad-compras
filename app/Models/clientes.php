<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class clientes extends Model
{
    use HasFactory;
    use Sortable;

    protected $fillable = [
        "cpf",
        "email",
        "nome_cliente"
    ];
    public $sortable = ['id', 'cpf', 'email', 'nome_cliente', 'created_at'];
}
