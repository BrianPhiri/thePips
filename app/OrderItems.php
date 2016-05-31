<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
   protected $table = 'order-items';

   public function products()
   {
   		return $this->belongsTo('App\Products');
   }  
}
