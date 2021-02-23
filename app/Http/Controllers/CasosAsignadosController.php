<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class CasosAsignadosController extends Controller
{
    public function index()
    {
        $casos = Cliente::latest()->where('est_caso_ge','!=','finalizado')->paginate('10');
        return view('casos-asignados.index', compact('casos'));
    }

    public function edit($id)
    {
        $caso_editar = Cliente::where('id','=',$id)->first();
        return view('casos-asignados.edit', compact('caso_editar'));
    }

    public function update(Request $request, $id)
    {
        $caso_editar = array();

        $caso_editar['cliente'] = $request->cliente;
        $caso_editar['sexo'] = $request->sexo;
        $caso_editar['anho_nacimiento'] = $request->anho_nacimiento;
        $caso_editar['lugar_nacimiento'] = $request->lugar_nacimiento;
        $caso_editar['pais_nacimiento'] = $request->pais_nacimiento;
        $caso_editar['n_pasaporte'] = $request->n_pasaporte;
        $caso_editar['pais_pasaporte'] = $request->pais_pasaporte;
        $caso_editar['familiares'] = $request->familiares;
        $caso_editar['est_caso_ge'] = $request->est_caso_ge;
        $caso_editar['etiqueta'] = $request->etiqueta;
        $caso_editar['gen_sefar'] = $request->gen_sefar;
        $caso_editar['abogado'] = $request->abogado;
        $caso_editar['may_est'] = $request->may_est;
        $caso_editar['may_inf'] = $request->may_inf;
        $caso_editar['observaciones'] = $request->observaciones;
        $caso_editar['fecha_registro'] = $request->fecha_registro;
        $caso_editar['fs_estudio'] = $request->fs_estudio;
        $caso_editar['fa_estudio'] = $request->fa_estudio;
        $caso_editar['gen_ext'] = $request->gen_ext;
        $caso_editar['est_caso_ge'] = $request->est_caso_ge;
        $caso_editar['obs_ge'] = $request->obs_ge;

        $caso_editar = Cliente::where('id',$id)->update($caso_editar);

        return back()->with('success', 'Editado con Éxito');
    }
}
