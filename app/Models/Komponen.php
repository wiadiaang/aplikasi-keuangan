<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Komponen extends Model
{
    use HasFactory;

    protected $fillable = [
        'komponen_id', 'komponen_name', 'komponen_deskripsi', 'date_created','date_modified', 'created_by', 'modified_by','status'
    ];

    public $timestamps = false;

    protected $primaryKey = 'komponen_id';

    protected $table = 'komponen_dasar';

    public $incrementing = false;


    public static function get_all_komponen(){
        $query = Db::table('komponen_dasar')
                ->select('komponen_id','komponen_name')
                ->get();
        return $query;
    }
}
