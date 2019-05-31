<?php

namespace App\Http\Controllers;

use App\tipoEvento;
use Illuminate\Http\Request;

class TipoEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = tipoEvento::paginate(10);
        return view('tipoEventos.index',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = tipoEvento::create($request->all());

        flash('Tipo de Evento Agregado con Éxito')->success();
        return redirect()->route('tipoEventos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipoEvento  $tipoEvento
     * @return \Illuminate\Http\Response
     */
    public function show(tipoEvento $tipoEvento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipoEvento  $tipoEvento
     * @return \Illuminate\Http\Response
     */
    public function edit(tipoEvento $tipoEvento,  $id)
    {
        $tipo = tipoEvento::find($id);
        return view('tipoEventos.edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipoEvento  $tipoEvento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipoEvento $tipoEvento, $id)
    {
        $tipo = tipoEvento::find($id);
        $tipo->update($request->all());

        flash('Tipo de Evento Editado con Éxito')->warning();
        return redirect()->route('tipoEventos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipoEvento  $tipoEvento
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipoEvento $tipoEvento, $id)
    {
        $tipo = tipoEvento::find($id);
        $tipo->delete();

        flash('Tipo de Evento Eliminado con Éxito')->error();
        return redirect()->route('tipoEventos.index');

    }
}
