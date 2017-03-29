<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //
    protected $table  = 'lb_issuelog';

    protected $fillable = ['bookid','book_title','studentid','issuedby','status','returntime','writtenid'];
}
