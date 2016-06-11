<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletingTrait;


class Products extends Model
{
    static $products = 'products';
    // protected $dates = ['deleted_at'];
    protected $fillable = [
      'name', 'sub_category_id','price', 'description', 'image'
    ];

    public function orderItems()
    {
    	return $this->hasMany('App\OrderItems');
    }

    public function shopCart()
    {
    	return $this->hasMany('App\ShopCart');
    }
}
