<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $table = 'lb_type';
    protected $fillable = ['id','type'];
}
