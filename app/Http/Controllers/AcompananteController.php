<?php

namespace App\Http\Controllers;

use App\Acompanante;
use Illuminate\Http\Request;
use Session;
use Auth;

class AcompananteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if ((Session::get('totalInvitados')+1) > Session::get('plan')) {
            dd("lo sentimos, llegaste al limite de invitados de tu plan");
        }

        Acompanante::create([
            'name' => $request->name,
            'appat' => $request->appat,
            'apmat' => $request->apmat,
            'invitado_id' => Session::get('invitado'),
            'nino' => $request->nino,
        ]);

        flash($request->name.' ahora es parte de tus invitados')->info();
        return redirect()->route('invitados.show',Session::get('invitado'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Acompanante  $acompanante
     * @return \Illuminate\Http\Response
     */
    public function show(Acompanante $acompanante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Acompanante  $acompanante
     * @return \Illuminate\Http\Response
     */
    public function edit(Acompanante $acompanante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acompanante  $acompanante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acompanante $acompanante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acompanante  $acompanante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acompanante $acompanante)
    {
        //
    }
}
