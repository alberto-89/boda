<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use App\Evento;
use App\User;
use Auth;
use Carbon\Carbon;
use Jenssegers\Date\Date;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::forget('codigo');
        $user = User::find(Auth::user()->id);
        return view('eventos.index', compact('user'));
    }
}
