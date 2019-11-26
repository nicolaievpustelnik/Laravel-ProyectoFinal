<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function rank(){
        return view('juego/ranking');
    }
}
