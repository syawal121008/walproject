<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'tblusers';
    protected $primaryKey ='user_id';
    protected $fillable =[
        'name',
        'email',
        'password',
        'role',
    ];
}
