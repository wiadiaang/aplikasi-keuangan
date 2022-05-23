<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $fillable = [
        'account_id',
        'parent_id',
        'cf_id',
        'fs_id',
        'entitas_id',
        'entitas_type_id',
        'account_code',
        'account_name',
        'tax_code',
        'starting_balance',
        'position',
       
        'date_created',
        'created_by',
        'date_modified',
        'modified_by',
        'status'
      
       
    ];

    public $timestamps = false;

    protected $primaryKey = 'account_id';

    public static function getAccount(){
        $query = Db::table('accounts')
                ->select('account_id','account_name')
                ->where('status','=',true)
                ->get();
        return $query;
    }

    public static function getBalanceGroup(){
        $query = Db::table('accounts')
                ->select('account_id','account_name')
                ->where('status','=',true)
                ->where('account_code','=', null)
                ->where('fs_id','=',1)
                ->get();
        return $query;
    }

    public static function getProfitGroup(){
        $query = Db::table('accounts')
                ->select('account_id','account_name')
                ->where('status','=',true)
                ->where('account_code','=', null)
                ->where('fs_id','=',2)
                ->get();
        return $query;
    }

    
    public function scopeRoot($query)
    {

         $query->whereNull('parent_id');
    }

    public function children()
    {
        return $this->hasMany(Account::class, 'parent_id');
    }
}
