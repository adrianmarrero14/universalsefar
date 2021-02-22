<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bd;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos = Bd::latest()->paginate('10');

        return view('documentos.index', compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $documento = array();

        $documento['documento'] = $request->documento;
        $documento['responsabilidad'] = $request->responsabilidad;
        $documento['titulo_revista'] = $request->titulo_revista;
        $documento['coleccion'] = $request->coleccion;
        $documento['fuente'] = $request->fuente;
        $documento['origen'] = $request->origen;
        $documento['notas'] = $request->notas;
        $documento['ubicacion'] = $request->ubicacion;
        $documento['ubicacion_ant'] = $request->ubicacion_ant;
        $documento['editorial'] = $request->editorial;
        $documento['colacion'] = $request->colacion;
        $documento['isbn'] = $request->isbn;
        $documento['fecha_incorporacion'] = $request->fecha_incorporacion;
        $documento['enlace'] = $request->enlace;
        $documento['anho_ini'] = $request->anho_ini;
        $documento['anho_fin'] = $request->anho_fin;
        $documento['formato'] = $request->formato;
        $documento['anho_publicacion'] = $request->anho_publicacion;
        $documento['no_vol'] = $request->no_vol;
        $documento['tipo'] = $request->tipo;
        $documento['pais'] = $request->pais;
        $documento['edicion'] = $request->edicion;
        $documento['ciudad'] = $request->ciudad;
        $documento['busqueda'] = $request->busqueda;

        $documento = Bd::insert($documento);

        return back()->with('success', 'Creado con Éxito');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documento = Bd::where('id', $id)->first();
        return view('documentos.edit', compact('documento'));
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
        $documento = array();

        $documento['documento'] = $request->documento;
        $documento['responsabilidad'] = $request->responsabilidad;
        $documento['titulo_revista'] = $request->titulo_revista;
        $documento['coleccion'] = $request->coleccion;
        $documento['fuente'] = $request->fuente;
        $documento['origen'] = $request->origen;
        $documento['notas'] = $request->notas;
        $documento['ubicacion'] = $request->ubicacion;
        $documento['ubicacion_ant'] = $request->ubicacion_ant;
        $documento['editorial'] = $request->editorial;
        $documento['colacion'] = $request->colacion;
        $documento['isbn'] = $request->isbn;
        $documento['fecha_incorporacion'] = $request->fecha_incorporacion;
        $documento['enlace'] = $request->enlace;
        $documento['anho_ini'] = $request->anho_ini;
        $documento['anho_fin'] = $request->anho_fin;
        $documento['formato'] = $request->formato;
        $documento['anho_publicacion'] = $request->anho_publicacion;
        $documento['no_vol'] = $request->no_vol;
        $documento['tipo'] = $request->tipo;
        $documento['pais'] = $request->pais;
        $documento['edicion'] = $request->edicion;
        $documento['ciudad'] = $request->ciudad;
        $documento['busqueda'] = $request->busqueda;

        $documento = Bd::where('id', $id)->update($documento);

        return back()->with('success', 'Editado con Éxito');
    }

}
