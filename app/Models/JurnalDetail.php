<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JurnalDetail extends Model
{
    use HasFactory;

    protected $fillable = [
         'jurnal_id', 'group_id','debit','credit','curency'
    ];

    public $timestamps = false;

    protected $primaryKey = 'jurnal_detail_id';

    protected $table = 'jurnal_detail';

    public $incrementing = false;
}
