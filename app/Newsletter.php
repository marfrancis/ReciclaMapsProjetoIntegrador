<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    public $timestamps = false;
    protected $fillable = ['email'];
    protected $guarded = ['id'];
    protected $table = 'newsletters';
}
