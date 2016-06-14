<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Orders extends Model
{
    protected $table = 'orders';
<<<<<<< HEAD

    use SoftDeletes;
    protected $dates = ['deleted_at'];

=======
    
    public function orderItems(){
        return $this->hasMany('App\OrderItems');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
>>>>>>> 69d64049acb423d3c495dfec02d2b9336745850b
}
