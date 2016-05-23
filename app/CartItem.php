<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
	public $table = 'cart-items';
	
    public function cart()
    {
    	return $this->belongsTo('App\Cart');
    }
    public function product()
    {
    	return $this->belongsTo('App\Products');
    }
}