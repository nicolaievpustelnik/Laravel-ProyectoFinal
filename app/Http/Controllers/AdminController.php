<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preguntasrespuesta;

class AdminController extends Controller
{
    // VER PREGUNTAS
    public function show(){
        $preguntas = Preguntasrespuesta::all();
        return view('juego/preguntas')->with('preguntas',$preguntas);
    }
    // DELETE PREGUNTAS
    public function delete($id){
        $preguntas =  Preguntasrespuesta::find($id);
        $preguntas->delete();
        return back()->with('mensaje',' Se ha eliminado una pregunta...!');
  
    }
    // HOME ADMIN
    public function homeAdmin(){
        return view('juego/homeAdmin');
    }
}
