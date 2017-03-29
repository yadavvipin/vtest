<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
     protected $table = 'lb_bill';
    protected $fillable = ['id','title','date','amount'];
}
