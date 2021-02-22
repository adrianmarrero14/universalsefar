<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasosFinalizadosController extends Controller
{
    public function index()
    {
        return view('casos-finalizados.index');
    }

    public function edit()
    {
        return view('casos-finalizados.edit');
    }
}
