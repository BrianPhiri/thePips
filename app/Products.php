<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Products extends Model
{
    static $products = 'products';
    protected $fillable = [
      'name', 'sub_category_id','price', 'description', 'image', 'place'
    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function orderItems()
    {
    	return $this->hasMany('App\OrderItems');
    }

    public function shopCart()
    {
    	return $this->hasMany('App\ShopCart');
    }
}
