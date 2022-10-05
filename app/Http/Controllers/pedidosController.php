<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedidos;
use Exception;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\DB;

class pedidosController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        //$pedidos = pedidos::sortable()->paginate(20);
        //return view('pedidos', compact('pedidos'));
        $pedidos = DB::table('pedidos')
            ->join('clientes', 'pedidos.clientes_id', '=', 'clientes.id')->paginate(10);
        //dd($pedidos);
        return view('pedidos', compact('pedidos'));
        //$pedidos = $pedidos::;
    }
}
