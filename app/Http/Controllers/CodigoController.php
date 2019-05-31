<?php

namespace App\Http\Controllers;

use App\Codigo;
use App\Plan;
use PDF;
use Illuminate\Http\Request;

class CodigoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codigos = Codigo::where('usado',0)->paginate(30);
        
        // String Random
        $characters = time().'ZabcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $nuevoCodigo = '';
            for ($i = 0; $i < 10; $i++) {
                $nuevoCodigo .= $characters[rand(0, strlen($characters)-1)];
            }

        //Planes
        $planes = Plan::all()->pluck('nombre','id');
        return view('codigos.index',compact('codigos','nuevoCodigo','planes'));
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
        Codigo::create($request->all());

        flash('Codigo generado con exito')->success();
        return redirect()->route('codigos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Codigo  $codigo
     * @return \Illuminate\Http\Response
     */
    public function show(Codigo $codigo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Codigo  $codigo
     * @return \Illuminate\Http\Response
     */
    public function edit(Codigo $codigo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Codigo  $codigo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Codigo $codigo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Codigo  $codigo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Codigo $codigo, $id)
    {
        $codigo = Codigo::find($id);
        $codigo->delete();

        flash('Codigo eliminado')->error();
        return redirect()->route('codigos.index');
    }

    public function generatePDF($id)
    {
        $codigo = Codigo::find($id);
        
        $pdf = PDF::loadView('pdf.codigo', compact('codigo'));
        return $pdf->download($codigo->codigo.'.pdf');
    }
}
