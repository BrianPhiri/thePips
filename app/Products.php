<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    static $products = 'products';
    protected $fillable = [
      'product_name',
      'sub_category_id',
      'product_price',
      'product_description'
    ];
    public $timestamps = false;
}
