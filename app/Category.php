<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
		'title',
        'file',
        'uri',
    ];

    public function pictures() {
    	return $this->hasMany('App\pictures');
    }
}
