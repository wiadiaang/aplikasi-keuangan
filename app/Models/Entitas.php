<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'entitas_type_id',
        'entitas_type_name',
        'entitas_deskripsi',
       
    ];
}
