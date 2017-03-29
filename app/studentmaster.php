<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentmaster extends Model
{
    protected $table  = 'stu_master';

    protected $fillable = ['stu_master_id','stu_master_course_id'];
}
