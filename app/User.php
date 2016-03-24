<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'mariage_id',
        'email', 
        'password',
        'status',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function picture() {
        return $this->hasMany('App\Picture');
    }

    public function mariage() {
        return $this->belongsTo('App\Mariage');
    }

    public function isSuperAdmin()
    {
        if (!empty($this->status))
            return $this->status == 'admin';

        return false;
    }
}
