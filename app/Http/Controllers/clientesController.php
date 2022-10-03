<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\clientes;
use Exception;
use Illuminate\Support\Facades\Redirect;

class clientesController extends Controller
{
    public function index()
    {
        $clientes = clientes::get();
        return view('clientes', ['clientes' => $clientes]);
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
