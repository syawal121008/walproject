<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table ='tbl_customer';
    protected $primaryKey = 'customer_id';
    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'address',
        'member_status'
    ];
}
