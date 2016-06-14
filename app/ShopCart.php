<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopCart extends Model
{
	public $table = 'carts';

	protected $fillable = ['user_id'];

    /**
     * A Shop Cart Belongs to a user. 
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function products()
    {
    	return $this->belongsTo('App\Products');
    }

}
