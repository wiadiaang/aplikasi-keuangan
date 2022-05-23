<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CashFlowStatement extends Model
{
    use HasFactory;

    protected $fillable = [
        'cf_id', 'cashflow_statement'
    ];

    public $timestamps = false;

    protected $primaryKey = 'cf_id';

    protected $table = 'statement_cashflow';

    public $incrementing = false;


    public static function get_all(){
        $query = Db::table('statement_cashflow')
                ->select('cf_id','cashflow_statement')
                ->get();
        return $query;
    }
}
