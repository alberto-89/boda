<?php

namespace App\Http\Controllers;

use App\Invitado;
use Illuminate\Http\Request;
use App\Evento;
use Session;
use Auth;

class InvitadoController extends Controller
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
        return view('invitados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//cuenta Invitados
        //dd(Session::get('totalInvitados'),Session::get('plan'));
        if (Session::get('totalInvitados') >= (Session::get('plan'))) {
            dd("lo sentimos, llegaste al limite de invitados de tu plan");
        }
// Validación
        $request->validate([
                    'titulo' => 'required',
                    'name' => 'required|max:255',
                    'appat' => 'required|max:255',
                    'apmat' => 'max:255',
                ]);

        switch ($request) {
            case isset($request->telefono):
                $request->validate([
                    'telefono' => 'digits:10|unique:invitados',
                ]);
                break;
            case isset($request->email):
                $request->validate([
                    'email' => 'email|unique:invitados',
                ]);
                break;

            default:
                flash('Debes incluir por lo menos un teléfono o un correo electrónico')->error();
                return back()->withInput();
                break;
        }

                $invitado = Invitado::create([
                    'titulo' => $request->titulo,
                    'name' => $request->name,
                    'appat' => $request->appat,
                    'apmat' => $request->apmat,
                    'telefono' => $request->telefono,
                    'email' => $request->email,
                    'evento_id' => Session::get('eventoId'),
                    'user_id' => Auth::User()->id,
                ]);
                flash($request->name.' ahora es parte de tus invitados')->info();
                return redirect()->route('invitados.show',$invitado->id);

}
    /**
     * Display the specified resource.
     *
     * @param  \App\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function show(Invitado $invitado, $id)
    {
        Session::put('invitado',$id);
        $evento_id = Session::get('eventoId');
        $invitado = Invitado::find($id);
        $this->authorize('pass', $invitado);
        $evento = Evento::find($evento_id);
        return view('invitados.show', compact('invitado','evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function edit(Invitado $invitado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invitado $invitado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invitado $invitado, $id)
    {
        $invitado = Invitado::find($id);
        $this->authorize('pass', $invitado);
        $invitado->delete();

        flash('Invitado Eliminado')->error();
        return redirect()->route('eventos.show',Session::get('eventoId'));
    }
}
