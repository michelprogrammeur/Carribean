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

    public function users() {
    	return $this->hasMany('App\User');
    }

    public function article() {
        return $this->hasMany('App\Article');
    }
}
