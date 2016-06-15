<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategories extends Model
{
  public $table = 'subcategories';
  protected $fillable = [
    'name', 'description', 'category_id'
  ];

  use SoftDeletes;
  protected $dates = ['deleted_at'];

  public function category(){
    return $this->hasMany('App\Categories', 'categories_id', 'id');
  }
  public function products(){
    return $this->hasMany('App\Products', 'sub_category_id', 'id');
  }
}
