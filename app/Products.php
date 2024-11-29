<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'tblproducts';
    protected $primaryKey = 'products_id';
    protected $fillable = [
        'products_name',
        'category_id',
        'product_description',
        'price',
        'stock',
        'photo',
    ];
    

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }
}
