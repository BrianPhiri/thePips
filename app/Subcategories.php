<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
  public $table = 'subcategories';
  protected $fillable = [
    'name', 'description', 'category_id'
  ];
}
