<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Entitas;
use App\Models\Typeentitas;
use Carbon\Carbon;
use DataTables;
use DB;


class TypeController extends Controller
{
    
    //index
    public function index()
    {
      
        //  return view('entitas type');
          return view('entitas/type',[
              "title" => "Type Entitas",
              "keusya" => "" 
          ]);
          
    }

      // parsing data untuk datatable
    public function getType(){
        $result = DB::table("entitas_type")->get();
        return DataTables::of($result)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-note"></i> Edit </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-magnifier"></i> View </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-trash"></i> Delete</a>
                                            </li>
                                        
                                        </ul>
                                    </div>';
                    return $actionBtn;
                })

                // <a href="/type/edit/'.$row->entitas_type_id.'" class="btn btn-success">Edit</a>
                    
                    
                    
                // ->editColumn('status', function ($inquiry) {
                //     if ($inquiry->instance_status == true) return 'Aktif';
                //     if ($inquiry->instance_status == false) return 'Tidak Aktif';
                // })
                ->rawColumns(['action'])
                ->make(true);
    }

    public function createnew()
    {

        //  return view('entitas type');
        return view('entitas/createnew',[
            "title" => "Type Entitas",
            "keusya" => "" 
        ]);
    }

    public function store(Request $request)
    {

            // validate post
             $this->validate($request, [
                'entitas_type_name' => 'required|string|max:255'
             ]);


            //generatue UUID entitas string
             $uuid = Str::uuid()->toString(); 

             $now = Carbon::now('Asia/jakarta')->format('Y-m-d H:i:s');

             $post = Typeentitas::create([
    
               
                'entitas_type_name' => $request->entitas_type_name,
                'entitas_deskripsi' => $request->entitas_deskripsi,
                'email' => "$request->email",
          
                'date_created' =>  $now,
                'date_modified' => null,
                'created_by' => $uuid,
                'modified_by' => null
                                
                         
             ]);


            // var_dump($post);die();

             if ($post) {
                return redirect()
                    ->route('type')
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
}
