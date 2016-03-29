<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $fillable = [
        'title',
        'content',
        'mariage_id',
        'status',
        'published_at',
    ];

    public function picturearticle() {
        return $this->hasOne('App\PictureArticle');
    }

    public function mariage() {
    	return $this->belongTo('App\Mariage');
    }
}
