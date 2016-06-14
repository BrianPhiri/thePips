<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Categories extends Model
{
    public $table = 'categories';
    protected $fillable = [
      'name', 'description'
    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function category(){
      return $this->hasMany('App\Subcategories','category_id', 'id');
    }
}
