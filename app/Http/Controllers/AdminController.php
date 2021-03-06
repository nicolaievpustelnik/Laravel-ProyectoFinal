<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preguntasrespuesta;
use Illuminate\Support\Facades\Hash;
use App\Comentario;
use App\User;

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
    // AGG ADMIN
    public function aggAdmin(){
        return view('juego/aggAdmin');
    }
    // AGG PREG
    public function aggPreg(){
        return view('juego/aggPreg');
    }
    // COMENTARIOS
    public function coment(){
        $comentarios = Comentario::all();
        return view('juego/comentarios')->with('comentarios',$comentarios);
    }
    // DELETE comentarios
    public function deletComent($id){
        $comentarios =  Comentario::find($id);
        $comentarios->delete();
        return back()->with('msj',' Se ha eliminado un comentario...!');  
    }
    public function addAdminis(Request $request){

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'rol' => 2,
        ]);



        return view('juego/aggAdmin');
    }
    
}
