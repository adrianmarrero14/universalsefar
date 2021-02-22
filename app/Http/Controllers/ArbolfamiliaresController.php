<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Familiares;

class ArbolFamiliaresController extends Controller
{
    function index()
    {
        $familiares = Familiares::latest()->paginate('10');
        return view('arbol-familiares.index', compact('familiares'));
    }

    function edit($id)
    {
        $familiar = Familiares::where('id', $id)->first();
        return view('arbol-familiares.edit', compact('familiar'));
    }
}
