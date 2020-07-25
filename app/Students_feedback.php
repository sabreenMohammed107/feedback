<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students_feedback extends Model
{
    protected $fillable = [
        'full_name', 'mobile_num', 'education','job','student_course','course_trainer','benift_berc','note'
    ];
}
