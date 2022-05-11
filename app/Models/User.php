<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'entitas_id', 'full_name', 'email','no_phone', 'password', 'profile', 'date_created','date_modified', 'created_by', 'modified_by','status','role_id'
    ];

    public $timestamps = false;
    protected $primaryKey = 'user_id';

    protected $table = 'user';
    public $incrementing = false;
}
