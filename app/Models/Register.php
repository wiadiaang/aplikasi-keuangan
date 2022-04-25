<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        'entitas_id',
        'entitas_type_code',
        'entitas_name',
        'entitas_provinsi_code',
        'entitas_kota_code',
        'entitas_kec_code',
        'entitas_desa_code',
        'entitas_phone',
        'date_created',
        'date_modified',
        'created_by',
        'modified_by',
        'entitas_address',
        'status'
    ];
        
    public $timestamps = false;
    protected $primaryKey = 'entitas_id';

    protected $table = 'entitas';
}
