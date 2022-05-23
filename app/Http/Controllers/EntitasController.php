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
            "menu"  => "master",
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

                    if ($result->status === true){
                        $lable = '<span class="label label-sm label-success"> Aktiv </span>';
                        return $lable ;
                    }else{
                        $lable = '<span class="label label-sm label-danger circle"> Tidak Aktiv </span>';
                        return  $lable;
                       
                    }
                   
                })
                ->addColumn('action', function($row){
                    $actionBtn = '
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="/entitas/edit/'.$row->entitas_id.'">
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
               
                ->rawColumns(['action','status'])
                ->make(true);
    }

}
