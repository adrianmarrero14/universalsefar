<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasosAsignadosController extends Controller
{
    public function index()
    {
        return view('casos-asignados.index');
    }

    public function edit()
    {
        return view('casos-asignados.edit');
    }
}
