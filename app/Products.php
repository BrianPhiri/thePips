<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    static $products = 'products';
    protected $fillable = [
      'name', 'sub_category_id','price', 'description'
    ];
}
