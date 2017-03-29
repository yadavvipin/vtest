<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'lb_category';
    protected $fillable = ['id','category'];
}
