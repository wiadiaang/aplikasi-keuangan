<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurnal;
use App\Models\JurnalDetail;
use App\Models\Account;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DataTables;

class JurnalController extends Controller
{
    public function index()
    {

       
      //  return view('home');
        return view('jurnal/JurnalList',[
            "title" => "Jurnal",
            // "groupA" => $GroupA ,
            // "groupB" => $groupB 
        ]);
        
    }
    public function getJurnal(){


        
                          $totalQuery = "SELECT jurnal_id,sum(credit) as credit,sum(debit) as debit
                          FROM jurnal_detail
                          GROUP BY jurnal_detail.jurnal_id" ;
                          $result = Jurnal::select(['jurnal.jurnal_id', 'tgl_transaksi', 'no_referensi', 'narasi','debit','credit'])
                                    ->joinSub($totalQuery, 'jurnal_detail', function ($join)
                                    {
                                        $join->on('jurnal.jurnal_id', '=', 'jurnal_detail.jurnal_id');
                                            // ->on('members.name', '=', 'duplicates.dname');
                                    })
                                   // ->orderBy('jurnal_id')
                                    ->get();

                    //dd($result);
        return DataTables::of($result)
        ->addIndexColumn()
        ->editColumn('status', function ($result) {

            if ($result->debit != $result->credit ){
                $lable = '<span class="label label-sm label-danger circle "> Unbalance </span>';
                return $lable ;
            }else{
                $lable = '<span class="label label-sm label-success circle"> Balance </span>';
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
    public function create()
    {
        // $account =  Account::where('status',1) 
        $account =  DB::table('accounts')
                    ->orWhere(function($query)
                        {
                            $query->where('parent_id', '!=', null)
                                ->where('cf_id', '!=', null);
                        })
                    ->orderby('account_id','ASC')
                    ->get();
        return view('jurnal/JurnalCreate',[
            "title" => "Jurnal",
            "account" =>  $account,
            
        ]);
        
    }

    public function jurnalStore(Request $request)
    {


        $request->validate([
            'tanggal' => 'required|string|max:255',
            'referensi' => 'required|string|max:255',
            'narasi' => 'required|string|max:255',
            // 'addMore.*.group_id' => 'required',
            // 'addMore.*.debit' => 'required',
            // 'addMore.*.credit' => 'required',
        ]);

        $uuid = Str::uuid()->toString(); 

        $now = Carbon::now('Asia/jakarta')->format('Y-m-d H:i:s');

        $post = Jurnal::create([
            
                      
         
            'jurnal_id' =>  $uuid,
            'tgl_transaksi' => $request->tanggal,
            'no_referensi' => $request->referensi,
            'narasi' => $request->narasi,
            'deskripsi' =>'',
            'entitas_id' => $uuid,
            'date_created' =>  $now,
            'date_modified' => $now,
            'created_by' => $uuid,
            'modified_by' => null
         
                            
                    
        ]);

        foreach ($request->addMore as $key => $value) {
            $post =  JurnalDetail::create([
                      'jurnal_id' =>  $uuid,
                       'group_id' =>$value['group_id'],
                      
                       'debit' => $value['debit'],
                       'credit' =>$value['credit'],
                       'curency' =>'IDR'
            ]);

           // dd($post);
        }


        if ($post) {
            return redirect()
                ->route('jurnal')
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
