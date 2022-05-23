<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Entitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'entitas_type_id',
        'entitas_type_name',
        'entitas_deskripsi',
       
    ];

    public $timestamps = false;

    protected $primaryKey = 'entitas_id';

    protected $table = 'entitas';

    public $incrementing = false;


    public static function get_all_entitas(){
        $query = Db::table('entitas')
                ->select('entitas_id','entitas_name')
                ->where('status','=',1)
                ->get();
        return $query;
    }
}
