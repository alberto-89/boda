<?php

namespace App\Http\Controllers;

use App\TipoMesa;
use Illuminate\Http\Request;

class TipoMesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TipoMesa::paginate(10);
        return view('tipomesa.index',compact('tipos'));
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
        TipoMesa::create($request->all());

        flash('Mesa agregada con exito')->success();
        return redirect()->route('tipomesas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoMesa  $tipoMesa
     * @return \Illuminate\Http\Response
     */
    public function show(TipoMesa $tipoMesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoMesa  $tipoMesa
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoMesa $tipoMesa, $id)
    {
        $tipo = TipoMesa::find($id);
        return view('tipomesa.edit',compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoMesa  $tipoMesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoMesa $tipoMesa, $id)
    {
        $tipo = TipoMesa::find($id);
        $tipo->update($request->all());
        $tipo->save();

        flash('Mesa Editada con Exito')->warning();
        return redirect()->route('tipomesas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoMesa  $tipoMesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoMesa $tipoMesa, $id)
    {
        $tipo = TipoMesa::find($id);
        $tipo->delete();

        flash('Mesa eliminada con Exito')->error();
        return redirect()->route('tipomesas.index');
    }
}
