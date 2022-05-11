<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Entitas;
use App\Models\Role;
use DataTables;
use DB;
use Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function index()
    {
        
      //  return view('home');
        return view('user/userList',[
            "title" => "Pengguna Aplikasi",
            "keusya" => "" 
        ]);
        
    }

         // parsing data untuk datatable
    public function getUser(){
            $result = DB::table("user")
            ->join('entitas', 'entitas.entitas_id', '=', 'user.entitas_id')
            ->join('role', 'user.role_id', '=', 'role.role_id')
            ->select('user.user_id','user.full_name', 'user.email', 'entitas.entitas_name','user.date_created', 'user.status', 'user.no_phone','role.role_name')
            ->get();
    
            return DataTables::of($result)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $actionBtn = '<div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="/master/user/edit/'.$row->user_id.'">
                                                        <i class="icon-note"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="/master/user/show/'.$row->user_id.'">
                                                        <i class="icon-magnifier"></i> View </a>
                                                </li>
                                                <li>
                                                    
    
                                                    <a href="" data-id='.$row->user_id.' class="delete-confirm">
                                                        <i class="icon-trash"></i> Delete</a>
                                                </li>
                                            
                                            </ul>
                                        </div>';
                        return $actionBtn;
                    })
                    ->editColumn('status', function ($result) {
    
                        if ($result->status === true){
                            $lable = '<span class="label label-sm label-success"> Aktiv </span>';
                            return $lable ;
                        }else{
                            $lable = '<span class="label label-sm label-danger circle"> Tidak Aktiv </span>';
                            return  $lable;
                           
                        }
                       
                    })
    
                
                    ->rawColumns(['action'])
                    ->make(true);
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $entitas = Entitas::get_all_entitas(); // mengambil data entitas
         $role = Role::get_all_role(); // mengambil data role 
         return view('user/userCreate',[
            "title" => "Tambah User",
            "entitas" => $entitas,
            "role" => $role   
        ]);
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoleRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

          
             // validate post
             $this->validate($request, [
                'fullname' => 'required|string|max:255',
                'entitas' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'password' => 'required|string|max:255',
                'role_id' => 'required|string|max:3'
             ]);

            

            //generatue UUID entitas string
             $uuid = Str::uuid()->toString(); 

             $now = Carbon::now('Asia/jakarta')->format('Y-m-d H:i:s');


             $user = User::where('email', '=', $request->input('email'))->first(); // cek existhin user dengan email account

             if ($user === null) { 

                    $hashed = Hash::make($request->password); // enkripsi password 

                    $post = User::create([
            
                        'user_id' => $uuid,
                        'entitas_id' => $request->entitas,
                        'full_name' => $request->fullname,
                        'email' => $request->email,
                        'no_phone' => $request->no_phone,
                        'password' => $hashed ,
                        'profile' => '',
                        
                        'date_created' =>  $now,
                        'date_modified' => null,
                        'created_by' => $uuid,
                        'modified_by' => null,
                        'status' => $request->status,
                        'role_id' => $request->role_id,
                    
                                        
                                
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
                    ->route('user')
                    ->with([
                        'success' => 'Insert successfully'
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

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $entitas = Entitas::get_all_entitas(); // mengambil data entitas
        $role = Role::get_all_role(); // mengambil data role 
        $post = User::findOrFail($id);
        return view('user/userEdit', 
        [
            "title" => "Edit User",
            "post" => $post,
            "entitas" => $entitas,
            "role" => $role   
        ]);
    }

       /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoleRequest  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
       // validate post
       $this->validate($request, [
        'fullname' => 'required|string|max:255',
        'entitas' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        // 'password' => 'required|string|max:255',
        'role_id' => 'required|string|max:3'
     ]);

        $uuid = Str::uuid()->toString(); 
        $now = Carbon::now('Asia/jakarta')->format('Y-m-d H:i:s');
        $post = User::findOrFail($id);

       // $hashed = Hash::make($request->password); // enkripsi password 
        
        $post->update([
            'full_name' => $request->full_name,
            'entitas_id' => $request->entitas,
            'full_name' => $request->fullname,
            'email' => $request->email,
            'no_phone' => $request->no_phone,
           // 'password' => $hashed ,
           // 'profile' => '',
            
           // 'date_created' =>  $now,
            'date_modified' => $now,
           // 'created_by' => $uuid,
            'modified_by' => $uuid,
            'status' => $request->status,
            'role_id' => $request->role_id,
        ]);

        if ($post) {
            return redirect()
                ->route('user')
                ->with([
                    'success' => 'updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

}
