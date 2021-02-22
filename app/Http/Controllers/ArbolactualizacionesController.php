<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArbolActualizacionesController extends Controller
{
    public function index()
    {
        return view('arbolactualizaciones');
    }
}
