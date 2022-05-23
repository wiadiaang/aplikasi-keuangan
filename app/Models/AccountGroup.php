<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AccountGroup extends Model
{
    use HasFactory;

    protected $table = 'account_group';

    protected $fillable = [
        'group_id',
        'group_name',
        'parent_id',
        'type_id',
        'entitas_type_id',
        'fs_id',
        'status',
        'date_created',
        'created_by',
       
    ];

    public $timestamps = false;

    protected $primaryKey = 'group_id';

    public static function getBalanceGroup(){
        $query = Db::table('account_group')
                ->select('group_id','group_name')
                ->where('status','=',true)
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

    // public function childrenAccount()
    // {
    //     return $this->hasMany(Account::class, 'parent_id');
    // }
}
