<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fine extends Model
{
   protected $table = 'lb_fine';
    protected $fillable = ['f1','f2'];
}
