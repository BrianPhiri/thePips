<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
  public $table = 'subcategories';
  protected $fillable = [
    'name', 'description', 'category_id'
  ];

  public function category(){
    return $this->belongsTo('App\Categories');
  }
}
