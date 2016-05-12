<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $table = 'categories';
    protected $fillable = [
      'name', 'description'
    ];

    public function category(){
      return $this->hasMany('App\Subcategories','category_id', 'id');
    }
}
