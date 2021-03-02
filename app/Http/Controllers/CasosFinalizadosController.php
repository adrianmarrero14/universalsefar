<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class CasosFinalizadosController extends Controller
{
    public function index(Request $request)
    {
        $casos = Cliente::latest()->where('est_caso_ge','=','finalizado')->paginate('10');

        // Buscador
        $busqueda = $request->get('search');
        $resultados = Cliente::where('cliente','like',"%$busqueda%")->paginate('10');

        if($busqueda){
            $casos = $resultados;
        }

        return view('casos-finalizados.index', compact('casos'));
    }

    public function show($id)
    {
        $caso_show = Cliente::where('id','=',$id)->first();
        return view('casos-finalizados.show', compact('caso_show'));
    }
}
