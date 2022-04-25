<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entitas;
use DataTables;
use DB;


class TypeController extends Controller
{
    
    //index
    public function index()
    {
      
        //  return view('entitas type');
          return view('entitas/type',[
              "title" => "Type Entitas-keusya",
              "keusya" => "" 
          ]);
          
    }

      // parsing data untuk datatable
    public function getType(){
        $result = DB::table("entitas_type")->get();
        return DataTables::of($result)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="/type/edit/'.$row->entitas_type_id.'" class="btn btn-success">Edit</a>';
                    return $actionBtn;
                })
                // ->editColumn('status', function ($inquiry) {
                //     if ($inquiry->instance_status == true) return 'Aktif';
                //     if ($inquiry->instance_status == false) return 'Tidak Aktif';
                // })
                ->rawColumns(['action'])
                ->make(true);
    }

    public function create()
    {

        
    }
}
