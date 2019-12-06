<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preguntasrespuesta;

class JuegoController extends Controller
{
    public function editperf(){
        return view('juego/editarPerf');
    }

    public function juego(){
        return view('juego/juego');
    }

    public function llamaPregunta(){
        $preguntas = Preguntasrespuesta::all();
        // $cuenta = count($preguntas);
        // $randon = rand(1,$cuenta);
        // $preguntaImp = Preguntasrespuesta::find($randon);
        return view('juego/juego')->with('preguntas',$preguntas);
        // var_dump($cuenta);
    }
    
}
