<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        
      //  return view('home');
        return view('user/user',[
            "title" => "User-keusya",
            "keusya" => "" 
        ]);
        
    }
}
