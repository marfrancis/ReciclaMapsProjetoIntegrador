<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = ['titulo','texto','data','imagem'];
    protected $guarded = ['id'];
    protected $table = 'post';
}
