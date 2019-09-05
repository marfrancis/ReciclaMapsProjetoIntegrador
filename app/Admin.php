<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'email','password','nivel_user'];


    /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
    protected $hidden = [
        'password', 'nivel_user',
    ];
}