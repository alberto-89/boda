<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use App\Invitado;
use Carbon;
use Session;
use PDF;
use Auth;


class pdfController extends Controller
{
    public function download()
    {
    	$evento = Evento::find(Session::get('eventoId'));
    	$pdf = PDF::loadView('pdf.reporte', compact('evento'));
		return $pdf->download('invoice.pdf');
    }

    public function qrGenerateAll()
    {
    	$evento = Evento::find(Session::get('eventoId'));
        $invitados = Invitado::where('evento_id','=',Session::get('eventoId'))->get();
  		//return view('pdf.qr', compact('invitados'));
    	$pdf = PDF::loadView('pdf.qr', compact('invitados','evento'));
    	$pdf->setPaper([0, 0, 144, 252], 'landscape');
		return $pdf->download('ticketsQr.pdf');
    }
}
