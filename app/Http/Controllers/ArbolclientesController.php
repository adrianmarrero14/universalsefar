<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ArbolClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientes = Cliente::latest()->paginate('10');

        // Buscador
        $busqueda = $request->get('search');
        $resultados = Cliente::where('nombres','like',"%$busqueda%")->paginate('10');

        if($busqueda){
            $clientes = $resultados;
        }

        return view('arbol-clientes.index', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::where('id_cliente', $id)->first();
        return view('arbol-clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = array();

        $cliente['nombres'] = $request->nombres;
        $cliente['apellidos'] = $request->apellidos;
        $cliente['fecha_registro'] = $request->fecha_registro;
        $cliente['pais_nacimiento'] = $request->pais_nacimiento;
        $cliente['lugar_nacimiento'] = $request->lugar_nacimiento;
        $cliente['anho_nacimiento'] = $request->anho_nacimiento;
        $cliente['enlace'] = $request->enlace;
        $cliente['familiares'] = $request->familiares;
        $cliente['sexo'] = $request->sexo;

        $cliente = Cliente::where('id_cliente', $id)->update($cliente);

        return back()->with('success', 'Editado con Éxito');
    }
}
