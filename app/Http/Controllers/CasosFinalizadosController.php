<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class CasosFinalizadosController extends Controller
{
    public function index()
    {
        $casos = Cliente::latest()->where('est_caso_ge','=','finalizado')->paginate('10');
        return view('casos-finalizados.index', compact('casos'));
    }

    public function show($id)
    {
        $caso_show = Cliente::where('id','=',$id)->first();
        return view('casos-finalizados.show', compact('caso_show'));
    }
}
