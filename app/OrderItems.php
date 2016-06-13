<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
   protected $table = 'order_items';

   public function products()
   {
   		return $this->belongsTo('App\Products');
   }

   public function orders()
   {
   		return $this->belongsTo('App\Orders');
   }
}
