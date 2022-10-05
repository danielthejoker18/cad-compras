<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\clientes;
use Exception;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use Kyslik\ColumnSortable\Sortable;

class clientesController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        $clientes = clientes::sortable()->paginate(20);
        return view('clientes', compact('clientes'));
    }

    public function editar($id)
    {
        $cliente = clientes::findOrFail($id);
        return view('editar_cliente', ['cliente' => $cliente]);
    }

    public function update($id, Request $request)
    {
        try {
            $cliente = clientes::findOrFail($id);
            $cliente->update($request->all());
        } catch (Exception $e) {
            return Redirect::to('/clientes')->with('falha', 'Falha ao atualizar registro!');
        }
        return Redirect::to('/clientes')->with('sucesso', 'Registro Atualizado com sucesso!');
    }


    public function delete($id)
    {
        $cliente = clientes::findOrFail($id);

        try {
            $cliente->delete();
        } catch (Exception $e) {
            report($e);

            return Redirect::to('/clientes')->with('falha', 'Cliente tem pedidos e não pode ser excluído');
        }
        return Redirect::to('/clientes')->with('sucesso', 'Registro deletado com sucesso!');
    }
}
