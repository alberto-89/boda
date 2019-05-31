<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use QrCode;

class QrController extends Controller
{
    public function generate()
    {
  		return view('qrCode');
    }
}
