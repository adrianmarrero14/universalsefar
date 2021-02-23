<?php

namespace App\Http\Controllers;
use App\Models\AgCliente;

use Illuminate\Http\Request;

class ArbolActualizacionesController extends Controller
{
    public function index()
    {
        $familiares = AgCliente::latest()->orderBy('f_registro', 'desc')->paginate('10');
        return view('arbol-actualizaciones.index', compact('familiares'));
    }
}
