<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;
class Categories extends Model
{
    protected $table = 'tblcategories';
    protected $primaryKey = 'category_id';
    protected  $fillable = [
          'category_name',
          'description'
    ];
    public function Products()
    {
        return $this->hasMany(Products::class, 'category_id', 'category_id');
    }

}
