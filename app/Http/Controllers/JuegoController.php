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
        // $array = $preguntas->toJson();
        $cuenta = count($preguntas);
        $randon = rand(1,$cuenta);
        $preguntaImp = Preguntasrespuesta::find($randon);
        // return view('juego/json')->with('array',$array);
       return response()->json([
           'preguntaImp' => $preguntaImp,
           'respuestaRandon' => rand(1,4)
       ]);
    }
    
}
