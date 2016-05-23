<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
	public $table = 'title';
    public function user()
    {
    	return $this->hasMany('App\User');
    }
}
