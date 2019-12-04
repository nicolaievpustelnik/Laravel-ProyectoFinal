<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;

class PagNavController extends Controller
{
    // CONTACTO
    public function contac(){
        return view('juego/contacto');
    }
    public function guardarComent(Request $request){

        Comentario::create([
            'nombreC' => request('nombreC'),
            'apellidoC' => request('apellidoC'),
            'comentarios' => request('comentarios'),
        ]);

        return back()->with('mensajea',' Se ha enviado tu comentario satisfactoriamente...!');
    }

    // FAQ
    public function faq(){
        return view('juego/faq');
    }

    // RANKING
    public function rank(){
        return view('juego/ranking');
    }
    
}
