<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komponen;
use DataTables;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;


class KomponenController extends Controller
{

    // view halaman list index data
    public function index()
    {
        
      //  return view('home');
        return view('komponen/komponen',[
            "title" => "Komponen Dasar Akuntansi",
            "keusya" => "" 
        ]);
        
    }

    // parsing data untuk datatable
    public function getKomponen(){
            $result = DB::table("komponen_dasar")->get();

            return DataTables::of($result)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $actionBtn = '<div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="/master/komponen/edit/'.$row->komponen_id.'">
                                                        <i class="icon-note"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="/master/komponen/view/'.$row->komponen_id.'">
                                                        <i class="icon-magnifier"></i> View </a>
                                                </li>
                                                <li>
                                                    

                                                    <a href="" data-id='.$row->komponen_id.' class="delete-confirm">
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


    // view halaman add data
    public function createnew()
    {

        //  return view('entitas type');
        return view('komponen/createkomponen',[
            "title" => "Tambah Komponen Baru",
            "menu"  => "active open",
            "keusya" => "" 
        ]);
    }

    // action save data
    public function store(Request $request)
    {

            // validate post
             $this->validate($request, [
                'komponen_name' => 'required|string|max:255'
             ]);

       

            //generatue UUID entitas string
             $uuid = Str::uuid()->toString(); 

             $now = Carbon::now('Asia/jakarta')->format('Y-m-d H:i:s');

             $post = Komponen::create([
    
               
                'komponen_name' => $request->komponen_name,
                'komponen_deskripsi' => $request->komponen_deskripsi,
                'date_created' =>  $now,
                'date_modified' => null,
                'created_by' => $uuid,
                'modified_by' => null,
                'status' => '0'
                                
                         
             ]);


            //  var_dump($post);die();

             if ($post) {
                return redirect()
                    ->route('komponen')
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

    // view  halaman edit data
    public function edit($id)
    {
        $post = Komponen::findOrFail($id);

   
        return view('komponen.edit', 
        [
            "title" => "Edit Komponen Dasar Akuntansi",
            "menu"  => "active open",
            "post" => $post
        ]);
    }

    // action update data
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'komponen_name' => 'required|string|max:255'
         ]);

        $uuid = Str::uuid()->toString(); 
        $now = Carbon::now('Asia/jakarta')->format('Y-m-d H:i:s');
        $post = Komponen::findOrFail($id);

        $post->update([
            'komponen_name' => $request->komponen_name,
            'komponen_deskripsi' => $request->komponen_deskripsi,
            'date_modified' => $now,
            'modified_by' => $uuid,
            'status' => '0'
        ]);

        if ($post) {
            return redirect()
                ->route('komponen')
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

    // delete data 
    public function delete($id){
        $post = Komponen::findOrFail($id);
        $post->delete();

        // if ($post) {
        //     return redirect()
    
        //         ->with([
        //             'success' => ' deleted successfully'
        //         ]);
        // } else {
        //     return redirect()
        //         ->route('komponen')
        //         ->with([
        //             'error' => 'Some problem has occurred, please try again'
        //         ]);
        // }
    }

    // view data only
    public function view($id)
    {
        $komponen = Komponen::findOrFail($id);

        return view('komponen/komponenview',[
            "title" => "Komponen Dasar Akuntansi",
            "menu"  => "active open",
            "komponen" => $komponen 
        ]);

        
    }
}
