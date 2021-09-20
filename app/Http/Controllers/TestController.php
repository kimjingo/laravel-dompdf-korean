<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class TestController extends Controller
{
    public function pdf(){
        $pdf = PDF::loadView('view');
        return $pdf->stream();
   
    }

    public function html(){
        return view('view');
    }
}
