<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mariage extends Model
{
    protected $fillable = [
        'title',
        'datemariage',
        'lieu',
        'content',
        'published_at',
    ];

    public function user() {
    	return $this->hasMany('App\User');
    }
}
