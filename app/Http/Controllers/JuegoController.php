<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function editperf(){
        return view('juego/editarPerf');
    }
}
