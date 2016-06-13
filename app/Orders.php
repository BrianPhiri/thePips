<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    
    public function orderItems(){
        return $this->hasMany('App\OrderItems');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
