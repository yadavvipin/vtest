<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table  = 'stu_info';

    protected $fillable = ['stu_info_id','stu_unique_id','stu_first_name','stu_middle_name','stu_last_name','stu_email_id','stu_mobile_no'];
}
