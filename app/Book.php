<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table  = 'lb_book';

    protected $fillable = ['book_title','author','type','edition','place_publication','year','pages','cost','category','quantity','almira_no','rek_no'];
}
