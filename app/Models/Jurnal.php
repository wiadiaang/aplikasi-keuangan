<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;

    protected $fillable = [
        'jurnal_id', 'tgl_transaksi', 'no_referensi','narasi','deskripsi','entitas_id', 'date_created','date_modified', 'created_by', 'modified_by'
    ];

    public $timestamps = false;

    protected $primaryKey = 'jurnal_id';

    protected $table = 'jurnal';

    public $incrementing = false;
}
