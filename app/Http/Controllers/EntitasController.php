<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entitas;
use DataTables;
use DB;

class EntitasController extends Controller
{
    //
    public function index()
    {
        
      //  return view('home');
        return view('entitas/entitas',[
            "title" => "Keusya | Entitas Syariah",
            "keusya" => "" 
        ]);
        
    }

       // parsing data untuk datatable
    public function getEntitas(){

        $result = DB::table("entitas")
                   ->join('entitas_type', 'entitas_type.entitas_type_id', '=', 'entitas.entitas_type_code')
                   ->select('entitas.entitas_id','entitas.entitas_name', 'entitas.entitas_address', 'entitas.date_created', 'entitas.status', 'entitas_type.entitas_type_name')
                   ->get();
        return DataTables::of($result)
                ->addIndexColumn()
                ->editColumn('status', function ($result) {

                    
                    if ($result->status == 1){
                        $status = '<span class="label label-sm label-success"> Aktiv </span>';
                        return $status ;
                    }else{
                        $status = '<span class="label label-sm label-error"> Tidak Aktiv </span>';
                        return $status;
                    }
                   
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="/entitas/edit/'.$row->entitas_id.'" class="btn btn-success">Edit</a>';
                    return $actionBtn;
                })
               
                ->rawColumns(['action'])
                ->make(true);
    }

}
