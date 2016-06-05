<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopCart extends Model
{
	public $table = 'carts';

	protected $fillable = ['user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function products()
    {
    	return $this->hasMany('App\Products', 'id', 'product_id');
    }

}