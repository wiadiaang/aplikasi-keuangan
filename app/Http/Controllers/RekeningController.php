<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountGroup;
use App\Models\CashFlowStatement;
use App\Models\Account;
use DataTables;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class RekeningController extends Controller
{
    public function index()
    {
         $GroupA =  Account::where('parent_id', null) 
                    ->where('fs_id', 1)
                    ->get();
        // $GroupB =  AccountGroup::get();
        $groupB =  Account::where('parent_id', null) 
        ->where('fs_id', 2)
        ->orderby('account_id','ASC')
        ->get();
       
      //  return view('home');
        return view('rekening/RekeningList',[
            "title" => "Rekening-keusya",
            "groupA" => $GroupA ,
            "groupB" => $groupB 
        ]);
        
    }

    // create group for banace sheet
    public function createGroupBalance()
    {
        
        $balanceGroup = Account::getBalanceGroup();
        return view('rekening/CreateGroupBalance',[
            "title" => "Rekening",
            "balanceGroup" => $balanceGroup,
           
        ]);
        
    }

    public function storeGroup(Request $request)
    {

          
             // validate post
             $this->validate($request, [
                'group_name' => 'required|string|max:255'   
             ]);

            

            //generatue UUID entitas string
             $uuid = Str::uuid()->toString(); 

             $now = Carbon::now('Asia/jakarta')->format('Y-m-d H:i:s');

            $group = $request->input('group_id');

          

             $dataGroup = AccountGroup::where('group_id', '=', $request->input('group_id') )->first(); // cek group atau sub group
            
            //  if ($dataGroup){
            //     $data=[
            //     'status'=>'1',
            //     'msg'=>'success'
            //   ];
            //   }else{
            //     $data=[
            //     'status'=>'0',
            //     'msg'=>'fail'
            //   ];

             if (!empty($group )) { 

                    // $post = AccountGroup::create([
            
                      
                    //     'parent_id' => $request->group_id,
                    //     'group_name' => $request->group_name,
                    //     'entitas_id' => null,
                    //     'entitas_type_id' =>  $uuid,
                    //     'type_id' => null,
                    //     'fs_id' => 1,
                        
                    //     'date_created' =>  $now,
                    //     'date_modified' => null,
                    //     'created_by' => $uuid,
                    //     'modified_by' => null,
                    //     'status' => '1',
                                        
                                
                    // ]);

                    $post = Account::create([
            
                      
                        'parent_id' => $request->group_id,
                        'account_name' => $request->group_name,
                        'entitas_id' => null,
                        'entitas_type_id' =>  $uuid,
                        'cf_id' => null,
                        'fs_id' => 1,
                        'account_code' => null,
                        'tax_code' => null,
                        'starting_balance' => null,
                        'position' => null,
                        'date_created' =>  $now,
                        'date_modified' => null,
                        'created_by' => $uuid,
                        'modified_by' => null,
                        'status' => '1',
                                        
                                
                    ]);

            }else{
                // $post = AccountGroup::create([
            
                   
                //         'parent_id' => null,
                //         'group_name' => $request->group_name,
                //         'entitas_id' => null,
                //         'entitas_type_id' =>  $uuid,
                //         'type_id' => null,
                //         'fs_id' => 1,
                        
                //         'date_created' =>  $now,
                //         'date_modified' => null,
                //         'created_by' => $uuid,
                //         'modified_by' => null,
                //         'status' => '1',
                     
                             
                //  ]);

                $post = Account::create([
            
                      
                    'parent_id' => $request->group_id,
                    'account_name' => $request->group_name,
                    'entitas_id' => null,
                    'entitas_type_id' =>  $uuid,
                    'cf_id' => null,
                    'fs_id' => 1,
                    'account_code' => null,
                    'tax_code' => null,
                    'starting_balance' => null,
                    'position' => null,
                    'date_created' =>  $now,
                    'date_modified' => null,
                    'created_by' => $uuid,
                    'modified_by' => null,
                    'status' => '1',
                                    
                            
                ]);
             }
        
           


             if ($post) {
                return redirect()
                    ->route('index')
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

   // create Account for banace sheet
   public function createAccountBalance()
   {
       $cashFlowStatement = CashFlowStatement::get_all();
       $balanceGroup = Account::getBalanceGroup();
       return view('rekening/CreateAccountBalance',[
           "title" => "Akun Rekening",
           "balanceGroup" => $balanceGroup,
           "cashFlowStatement" => $cashFlowStatement,
          
       ]);
       
   }

   public function storeAccountBalance(Request $request)
   {
             // validate post
             $this->validate($request, [
                'account_name' => 'required|string|max:255',
                'starting_balance' => 'required|string|max:255',
                'group_id' => 'required|string|max:255',
                'cf_id' => 'required|string|max:255',
                'position' => 'required|string|max:255'    
             ]);

            

            //generatue UUID entitas string
             $uuid = Str::uuid()->toString(); 

             $now = Carbon::now('Asia/jakarta')->format('Y-m-d H:i:s');

            //  $group = $request->input('group_id');

          

            //  $dataGroup = AccountGroup::where('group_id', '=', $request->input('group_id') )->first(); // cek group atau sub group
            
           

            //  if (!empty($group )) { 

                    $post = Account::create([
            
                      
                        //'account_id' => '',
                        'parent_id' => $request->group_id,
                        'cf_id' => $request->cf_id,
                        'fs_id' => '1',
                        'account_code' => $request->account_code,
                        'account_name' => $request->account_name,
                        'tax_code' => $request->tax_code,
                        'starting_balance' => $request->starting_balance,
                        'position' => $request->position,
                        'date_created' =>  $now,
                        'date_modified' => $now,
                        'created_by' => $uuid,
                        'modified_by' => null,
                        'status' => '1',
                        'entitas_id' =>   $uuid,
                                        
                                
                    ]);


        
           


             if ($post) {
                return redirect()
                    ->route('index')
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

    // create group for Profit sheet
    public function createGroupProfit()
    {
        
        $profitGroup = Account::getProfitGroup();
        return view('rekening/CreateGroupProfit',[
            "title" => "Rekening",
            "profitGroup" => $profitGroup,
           
        ]);
        
    }

    public function storeGroupProfit(Request $request)
    {

          
             // validate post
             $this->validate($request, [
                'group_name' => 'required|string|max:255'   
             ]);

            

            //generatue UUID entitas string
             $uuid = Str::uuid()->toString(); 

             $now = Carbon::now('Asia/jakarta')->format('Y-m-d H:i:s');

            $group = $request->input('group_id');

          

             $dataGroup = AccountGroup::where('group_id', '=', $request->input('group_id') )->first(); // cek group atau sub group
            
            //  if ($dataGroup){
            //     $data=[
            //     'status'=>'1',
            //     'msg'=>'success'
            //   ];
            //   }else{
            //     $data=[
            //     'status'=>'0',
            //     'msg'=>'fail'
            //   ];

             if (!empty($group )) { 

                    // $post = AccountGroup::create([
            
                      
                    //     'parent_id' => $request->group_id,
                    //     'group_name' => $request->group_name,
                    //     'entitas_id' => null,
                    //     'entitas_type_id' =>  $uuid,
                    //     'type_id' => null,
                    //     'fs_id' => 1,
                        
                    //     'date_created' =>  $now,
                    //     'date_modified' => null,
                    //     'created_by' => $uuid,
                    //     'modified_by' => null,
                    //     'status' => '1',
                                        
                                
                    // ]);

                    $post = Account::create([
            
                      
                        'parent_id' => $request->group_id,
                        'account_name' => $request->group_name,
                        'entitas_id' => null,
                        'entitas_type_id' =>  $uuid,
                        'cf_id' => null,
                        'fs_id' => 2,
                        'account_code' => null,
                        'tax_code' => null,
                        'starting_balance' => null,
                        'position' => null,
                        'date_created' =>  $now,
                        'date_modified' => null,
                        'created_by' => $uuid,
                        'modified_by' => null,
                        'status' => '1',
                                        
                                
                    ]);

            }else{
                // $post = AccountGroup::create([
            
                   
                //         'parent_id' => null,
                //         'group_name' => $request->group_name,
                //         'entitas_id' => null,
                //         'entitas_type_id' =>  $uuid,
                //         'type_id' => null,
                //         'fs_id' => 1,
                        
                //         'date_created' =>  $now,
                //         'date_modified' => null,
                //         'created_by' => $uuid,
                //         'modified_by' => null,
                //         'status' => '1',
                     
                             
                //  ]);

                $post = Account::create([
            
                      
                    'parent_id' => $request->group_id,
                    'account_name' => $request->group_name,
                    'entitas_id' => null,
                    'entitas_type_id' =>  $uuid,
                    'cf_id' => null,
                    'fs_id' => 2,
                    'account_code' => null,
                    'tax_code' => null,
                    'starting_balance' => null,
                    'position' => null,
                    'date_created' =>  $now,
                    'date_modified' => null,
                    'created_by' => $uuid,
                    'modified_by' => null,
                    'status' => '1',
                                    
                            
                ]);
             }
        
           


             if ($post) {
                return redirect()
                    ->route('index')
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
 
   // create Account for banace sheet
   public function createAccountProfit()
   {
       $cashFlowStatement = CashFlowStatement::get_all();
       $profitGroup = Account::getProfitGroup();
       return view('rekening/CreateAccountProfit',[
           "title" => "Akun Rekening",
           "profitGroup" => $profitGroup,
           "cashFlowStatement" => $cashFlowStatement,
          
       ]);
       
   }
   public function storeAccountProfit(Request $request)
   {
             // validate post
             $this->validate($request, [
                'account_name' => 'required|string|max:255',
                'starting_balance' => 'required|string|max:255',
                'group_id' => 'required|string|max:255',
                'cf_id' => 'required|string|max:255',
                'position' => 'required|string|max:255'    
             ]);

            

            //generatue UUID entitas string
             $uuid = Str::uuid()->toString(); 

             $now = Carbon::now('Asia/jakarta')->format('Y-m-d H:i:s');

            //  $group = $request->input('group_id');

          

            //  $dataGroup = AccountGroup::where('group_id', '=', $request->input('group_id') )->first(); // cek group atau sub group
            
           

            //  if (!empty($group )) { 

                    $post = Account::create([
            
                      
                        //'account_id' => '',
                        'parent_id' => $request->group_id,
                        'cf_id' => $request->cf_id,
                        'fs_id' => '2',
                        'account_code' => $request->account_code,
                        'account_name' => $request->account_name,
                        'tax_code' => $request->tax_code,
                        'starting_balance' => $request->starting_balance,
                        'position' => $request->position,
                        'date_created' =>  $now,
                        'date_modified' => $now,
                        'created_by' => $uuid,
                        'modified_by' => null,
                        'status' => '1',
                        'entitas_id' =>   $uuid,
                                        
                                
                    ]);


        
           


             if ($post) {
                return redirect()
                    ->route('index')
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
