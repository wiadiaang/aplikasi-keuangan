<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Typeentitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'entitas_type_id', 'entitas_type_name', 'entitas_deskripsi', 'date_created','date_modified', 'created_by', 'modified_by'
    ];

    public $timestamps = false;

    protected $primaryKey = 'entitas_type_id';

    protected $table = 'entitas_type';

    public $incrementing = false;


    public static function get_all_type(){
        $query = Db::table('entitas_type')
                ->select('entitas_type_id','entitas_type_name')
               // ->where('entitas_type_id','=',null)
                ->get();
        return $query;
    }
}
