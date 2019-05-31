<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Codigo;
use App\Confirmacion;
use App\Invitado;
use Session;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Jenssegers\Date\Date;

class EventoController extends Controller
{
    public function __construct()
    {
        Date::setLocale('es');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cofestejado' => 'max:255',
            'lugar' => 'required|max:255',
            'direccion' => 'required|max:255',
            'fecha' => 'required|max:255|date',
            'hora' => 'required|max:255',
            'vestimenta' => 'required|max:255',
            'tipo_evento_id' => 'required|max:255|integer',
        ]);

        $codigo_id = Session::get('codigo');
        $codEvento = substr($codigo_id.time(), 0,-5);

        $evento = Evento::create([
            'cofestejado' =>'',
            'cod_evento' => $codEvento,
            'lugar' => $request->lugar,
            'direccion' => $request->direccion,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'vestimenta' => $request->vestimenta,
            'tipo_evento_id' => $request->tipo_evento_id,
            'codigo_id' => $codigo_id,
            'user_id' => Auth::user()->id,
        ]);


        $codigo = Codigo::find($codigo_id);
        $codigo->usado = 1;
        $codigo->save();
        
        Session::forget('codigo');

        flash('Tu Evento ha sido creado')->success();
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento, $id)
    {
        //Sesiones
        Session::forget('invitado');
        Session::put('eventoId',$id);
        
        //Busca el evento
        $evento = Evento::find($id);
        $this->authorize('pass',$evento);
        //Cuenta los invitados
        $invitadosCount = $evento->invitados->count();
        $acompanantes = 0;
        foreach ($evento->invitados as $invitado) {
            $acompanantes = $acompanantes + $invitado->acompanantes->count();
        }
        $totalInvitados = $invitadosCount + $acompanantes;
        Session::put('totalInvitados',$totalInvitados);
        Session::put('plan',$evento->codigo->plan->invitados);
        
        //Asistencias
        $asistira = Confirmacion::where('evento_id',Session::get('eventoId'))
                        ->where('asistencia_id',1)
                        ->count();
        $duda = Confirmacion::where('evento_id',Session::get('eventoId'))
                        ->where('asistencia_id',2)
                        ->count();
        $noAsistira = Confirmacion::where('evento_id',Session::get('eventoId'))
                        ->where('asistencia_id',3)
                        ->count();
        
        //Vista
        return view('eventos.show', compact('evento','asistira','duda','noAsistira','totalInvitados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento, $id)
    {
        $evento = Evento::find($id);
        $this->authorize('pass',$evento);
        $evento->cofestejado = $request->cofestejado;
        $evento->save();

        flash('Tu pareja ha sido agregada')->success();
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }

    public function validateCode(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
        ]);

        $codigos = Codigo::where('codigo',$request->codigo)->get();
        if ($codigos->count() == 1) {
            if ($codigos[0]->usado == 0) {
                 Session::put('codigo',$codigos[0]->id);
                 return redirect()->route('eventos.create');
            } else {
                flash('Lo siento, No puedes usar este código')->error();
                return redirect()->route('clientes.index');
            }
        } elseif ($codigos->count() > 1) {
            dd('Hubo un error por favor contacta al administrador');
        } elseif ($codigos->count() == 0) {
            dd('Por favor verifica tu codigo');
        }
    }

    public function definitiveGuest($id)
    {
        $evento = Evento::find($id);
        $this->authorize('pass',$evento);
        $evento->confirmado = 1;
        $evento->save();

        $invitados = Invitado::where('evento_id','=',$evento->id)->get();

        foreach ($invitados as $invitado) {
            // String Random
            $characters = str_replace(' ', '',$invitado->appat.$invitado->apmat);
            $nuevoCodigo = '';
                for ($i = 0; $i < 5; $i++) {
                    $nuevoCodigo .= $characters[rand(0, strlen($characters)-1)];
                }

            //Store Codigo Invitado
                $invitado->codigo = $nuevoCodigo;
                $invitado->save();
        }

        flash('Ahora es nuestro turno, relajate')->success();
        return back();
    }
}
 