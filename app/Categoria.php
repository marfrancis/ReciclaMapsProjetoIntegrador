<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];
    protected $guarded = ['id'];
    protected $table = 'categorias';
}
