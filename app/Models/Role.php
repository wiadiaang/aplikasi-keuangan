<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id', 'role_name', 'read','write', 'execute',  'date_created','date_modified', 'created_by', 'modified_by'
    ];

    public $timestamps = false;

    protected $primaryKey = 'role_id';

    protected $table = 'role';

    public $incrementing = false;


    public static function get_all_komponen(){
        $query = Db::table('role')
                ->select('role_id','role_name')
                ->get();
        return $query;
    }
}
