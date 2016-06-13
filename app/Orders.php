<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    
    public function orderItems(){
        $this->hasMany('App/OrderItems', 'order_id', 'id');
    }
}
