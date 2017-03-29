<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Studentprofile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $table  = 'details';
    protected $fillable = ['name','enrollno','branch','email','approved','rejected','year'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
