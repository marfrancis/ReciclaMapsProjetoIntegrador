<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    public $timestamps = false;
    protected $fillable = ['modo_pagamento'];
    protected $guarded = ['id'];
    protected $table = 'pagamentos';
}
