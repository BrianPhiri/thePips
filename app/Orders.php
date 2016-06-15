<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Orders extends Model
{
    protected $table = 'orders';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function orderItems(){
        return $this->hasMany('App\OrderItems');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
