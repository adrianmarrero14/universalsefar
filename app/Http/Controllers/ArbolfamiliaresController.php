<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgCliente;

class ArbolFamiliaresController extends Controller
{
    function index()
    {
        $familiares = AgCliente::latest()->paginate('10');
        return view('arbol-familiares.index', compact('familiares'));
    }

    function edit($id)
    {
        $familiar = AgCliente::where('id_general', $id)->first();
        return view('arbol-familiares.edit', compact('familiar'));
    }

    public function update(Request $request, $id)
    {
        $familiar = array();

        $familiar['nombres'] = $request->nombres;
        $familiar['apellidos'] = $request->apellidos;
        $familiar['n_pasaporte'] = $request->n_pasaporte;
        $familiar['pais_pasaporte'] = $request->pais_pasaporte;
        $familiar['enlace'] = $request->enlace;
        $familiar['ndoc_indent'] = $request->ndoc_indent;
        $familiar['paisdoc_indent'] = $request->paisdoc_indent;
        $familiar['sexo'] = $request->sexo;
        $familiar['pais_nacimiento'] = $request->pais_nacimiento;
        $familiar['lugar_nacimiento'] = $request->lugar_nacimiento;
        $familiar['anho_nacimiento'] = $request->anho_nacimiento;
        $familiar['pais_bautizo'] = $request->pais_bautizo;
        $familiar['lugar_bautizo'] = $request->lugar_bautizo;
        $familiar['anho_bautizo'] = $request->anho_bautizo;
        $familiar['pais_matrimonio'] = $request->pais_matrimonio;
        $familiar['lugar_matrimonio'] = $request->lugar_matrimonio;
        $familiar['anho_matrimonio'] = $request->anho_matrimonio;
        $familiar['pais_defuncion'] = $request->pais_defuncion;
        $familiar['lugar_defuncion'] = $request->lugar_defuncion;
        $familiar['anho_defuncion'] = $request->anho_defuncion;

        $familiar = AgCliente::where('id_general', $id)->update($familiar);

        return back()->with('success', 'Editado con Éxito');
    }
}
