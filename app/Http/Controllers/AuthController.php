<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Register; // load Register model
use App\Models\user; // load User model
use App\Models\Typeentitas; // load Typeentitas model
use Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //fungsi untuk memanggil halaman login
    public function index()
    {
        
        return view('auth/login',[
            "title" => "Login-Keuangan Syariah",
            "keusya" => "" 
        ]);
        
    }


    //fungsi untuk post data login
    public function login_action()
    {
        
        return view('auth/login',[
            "title" => "Login-Keuangan Syariah",
            "keusya" => "" 
        ]);
        
    }


     //fungsi untuk memanggil halaman Register
     public function register()
     {
        $type = Typeentitas::get_all_type();
        return view('auth/register',[
            "title" => "Register-Keuangan Syariah",
            "type" => $type 
        ]);
         
     }


      //fungsi untuk post data Register
      public function register_action(Request $request)
      {
          
        
        // validate post
          $this->validate($request, [
            'entitas' => 'required|string|max:255',
            'type' => 'required',
            'email' => 'required',
            'password' => 'required',
            'repassword' => 'required'
         ]);

         //generatue UUID entitas string
         $uuid = Str::uuid()->toString(); 

        //generatue UUID user string
         $uuid2 = Str::uuid()->toString(); 

         //get current datetime
      
         $now = Carbon::now('Asia/jakarta')->format('Y-m-d H:i:s');

         // cek user sebelum insert
         $user = User::where('email', '=', $request->input('email'))->first();

         if ($user === null) {
            // user doesn't exist

           $hashed = Hash::make($request->password);
          // Hash::check('INPUT PASSWORD', $user->password);
                       // post user table
           $post = User::create([
    
               'user_id' => $uuid2,
               'entitas_id' => $uuid,
               'full_name' => "",
               'email' => "$request->email",
               'no_phone' => "",
               'password' => "$hashed",
               'profile' => "",
               'date_created' =>  $now,
               'date_modified' => null,
               'created_by' => $uuid2,
               'modified_by' => null,
               'status' => "1"
                        
                        
            ]);

            $post = Register::create([

                'entitas_id' => $uuid,
                'entitas_type_code' => $request->type,
                'entitas_name' => $request->entitas,
                'entitas_provinsi_code' => "",
                'entitas_kota_code' => "",
                'entitas_kec_code' => "",
                'entitas_desa_code' => "",
                'entitas_phone' => "",
                'date_created' => $now,
                'date_modified' => null,
                'created_by' => $uuid2,
                'modified_by' => null,
                'entitas_address' => "",
                'status' => "0",
                
                
            ]);
           
            


         }else{
                return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'email yang anda input sudah terdaftar, silahkan gunakan email yang lain'
                ]);
         }
        

        if ($post) {
            return redirect()
                ->route('register')
                ->with([
                    'success' => 'Register successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
          
      }


}
