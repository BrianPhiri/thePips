<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $table = 'category';
    protected $fillable = [
      'category_name',
      'category_description'
    ];
    public $timestamps = false;
}
