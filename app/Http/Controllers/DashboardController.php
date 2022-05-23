<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        if(Auth::check()){

           

            // echo $user->id;

            // echo $user->name;

            // echo $user->email;
            $user = Auth::user();
            // dd($user->email);
            // var_dump($user);die();
            return view('dashboard/dashboard',[
                "title" => "Dashboard",
                "menu"  => "dashboard",
                "user" => $user 
            ]);


        }
        return Redirect::to('/')->withSuccess('Opps! You do not have access');

       
        
    }
}
