<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntitasController extends Controller
{
    //
    public function index()
    {
        
      //  return view('home');
        return view('entitas/entitas',[
            "title" => "Entitas-keusya",
            "keusya" => "" 
        ]);
        
    }
}
