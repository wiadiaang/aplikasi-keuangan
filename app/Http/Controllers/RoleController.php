<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use DataTables;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Typeentitas; // load Typeentitas model

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //  return view('home');
          return view('role/roleView',[
            "title" => "Role Application",
            "keusya" => "" 
        ]);
    }


      // parsing data untuk datatable
      public function getRole(){
        $result = DB::table("role")->get();

        return DataTables::of($result)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="/master/role/edit/'.$row->role_id.'">
                                                    <i class="icon-note"></i> Edit </a>
                                            </li>
                                            <li>
                                                <a href="/master/role/view/'.$row->role_id.'">
                                                    <i class="icon-magnifier"></i> View </a>
                                            </li>
                                            <li>
                                                

                                                <a href="" data-id='.$row->role_id.' class="delete-confirm">
                                                    <i class="icon-trash"></i> Delete</a>
                                            </li>
                                        
                                        </ul>
                                    </div>';
                    return $actionBtn;
                })
                ->editColumn('read', function ($result) {

                    if ($result->read === true){
                        $lable = ' <input type="checkbox" class="group-checkable" data-set="#sample_5 .checkboxes">';
                        return $lable ;
                    }else{
                        $lable = '';
                        return  $lable;
                       
                    }
                   
                })

                // <a href="/type/edit/'.$row->entitas_type_id.'" class="btn btn-success">Edit</a>
                    
                    
                    
                // ->editColumn('status', function ($inquiry) {
                //     if ($inquiry->instance_status == true) return 'Aktif';
                //     if ($inquiry->instance_status == false) return 'Tidak Aktif';
                // })
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
        $type = Typeentitas::get_all_type();



         return view('role/roleCreate',[
            "title" => "Role Application",
            "type" => $type  
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
                'role_name' => 'required|string|max:255'
             ]);

       

            //generatue UUID entitas string
             $uuid = Str::uuid()->toString(); 

             $now = Carbon::now('Asia/jakarta')->format('Y-m-d H:i:s');

             $post = Role::create([
    
            

                'role_name' => $request->role_name,
                'read' => $request->read,
                'write' => $request->write,
                'execute' => $request->execute,
                'date_created' =>  $now,
                'date_modified' => null,
                'created_by' => $uuid,
                'modified_by' => null
               
                                
                         
             ]);


             // var_dump($post);die();

             if ($post) {
                return redirect()
                    ->route('role')
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
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoleRequest  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
