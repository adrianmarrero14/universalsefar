<?php

namespace App\Http\Controllers;
use App\Models\AgCliente;

use Illuminate\Http\Request;

class ArbolActualizacionesController extends Controller
{
    public function index(Request $request)
    {
        $familiares = AgCliente::latest()->orderBy('f_registro', 'desc')->paginate('10');

        // Buscador
        $busqueda = $request->get('search');
        $resultados = AgCliente::where('nombres','like',"%$busqueda%")->paginate('10');

        if($busqueda){
            $familiares = $resultados;
        }
        
        return view('arbol-actualizaciones.index', compact('familiares'));
    }
}
