<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PictureArticle extends Model
{
    protected $fillable = [
        'article_id',
    	'file',
    	'uri',
    	'status',
    	'published_at',
    ];

}
