<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'category_id',
        'file',
        'uri',
    	'caption',
    	'status',
    	'published_at',
    ];

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
