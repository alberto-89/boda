<?php

namespace App\Http\Controllers;

use App\Confirmacion;
use App\Invitado;
use Illuminate\Http\Request;
use Session;
use Input;

class ConfirmacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('confirmaciones.index');
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
        Confirmacion::create([
                'invitado_id' => Session::get('invitado'),
                'asistencia_id' => $request->asistencia,
                'evento_id' => Session::get('evento'),
            ]);

        if (isset($request->invitados)) {
            foreach ($request->invitados as $invitado) {
                Confirmacion::create([
                    'invitado_id' => Session::get('invitado'),
                    'acompanante_id' => $invitado,
                    'asistencia_id' => $request->asistencia,
                    'evento_id' => Session::get('evento'),
                ]);
            }
        }
        
        Session::forget('invitado');
        flash('Nosotros nos encargamos de avisar, Gracias')->success();
        return redirect()->route('confirmar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Confirmacion  $confirmacion
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate([
            'codigo' => 'required|max:5|exists:invitados',
        ]);

        $invitado = Invitado::where('codigo',$request->codigo)->first();
        if ($invitado->codigo === $request->codigo) {
            $confirmacion = Confirmacion::where('invitado_id',$invitado->id)->first();
            Session::put('invitado',$invitado->id);
            Session::put('evento',$invitado->evento->id);
            
            if (isset($confirmacion)) {
                return view('confirmaciones.confirmado',compact('invitado','confirmacion'));
            } else {
                return view('confirmaciones.show',compact('invitado'));
            }
        } else {
            flash('Ups! Revisa tu codigo, recuerda respetar mayusculas y minusculas')->error();
            return redirect()->route('confirmar');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Confirmacion  $confirmacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Confirmacion $confirmacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Confirmacion  $confirmacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Confirmacion $confirmacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Confirmacion  $confirmacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Confirmacion $confirmacion)
    {
        //
    }
}
